<?php
namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{

    public function mainlisting(){
        $ads=Advert::select('*')
            ->orderBy('created_at','desc')
            ->take(6)
            ->get();
        return view('index',compact('ads'));

    }

    public function search(Request $request){
        $search_category=$request->get('k');
        $x=$request->get('x');
        if($x==1){
            $ca=Category::where('title','LIKE','%'.$search_category.'%')
                ->select('id')
                ->value('id');

            $ad=Advert::where('categoryId','LIKE','%'.$ca.'%')
                ->paginate(6);

            $categoriesCount=Advert::
                select('categoryId',Advert::raw('count(*) as ct'))
                ->groupBy('categoryId')
                ->get();
            return view('category',compact('ad','categoriesCount','search_category','x'));

        }

        $search_text = Validator::make($request->all(), [
           'q' => 'required|min:3|max:255',
       ])->validate();
       $querry=$search_text['q'];
       $search_text=$querry;

        if ($search_category=='Wszystkie kategorie'){
            $ad=Advert::where('adverts.title','LIKE','%'.$search_text.'%')
                ->paginate(6);

            $categoriesCount=Advert::where('title','LIKE','%'.$search_text.'%')
                ->select('categoryId',Advert::raw('count(*) as ct'))
                ->groupBy('categoryId')
                ->get();
    return view('category',compact('ad','search_text','search_category','categoriesCount'));

        }
        else{
            $ca=Category::where('title','LIKE','%'.$search_category.'%')
                ->select('id')
                ->value('id');

            $ad=Advert::where('adverts.title','LIKE','%'.$search_text.'%')
                ->where('categoryId','LIKE','%'.$ca.'%')
                ->paginate(6);

            $categoriesCount=Advert::where('title','LIKE','%'.$search_text.'%')
                ->select('categoryId',Advert::raw('count(*) as ct'))
                ->groupBy('categoryId')
                ->get();

            return view('category',compact('ad','categoriesCount','search_text','search_category'));
        }


    }

    public function add(){
        $categories=Category::all();

        return view('addproduct',compact('categories'));
    }

    public function store(Request $request){
       // $input=$request->all();
        $input = Validator::make($request->all(), [
            'title' => 'required|min:3|max:255',
            'description'=>'required|min:3|max:3000',
            'cost'=>'required',
            'categoryId'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg|max:3096'
        ])->validate();
        $id=Auth::id();
        if($request->hasFile('image')){
            $destination_path='public/img/products';
            $image=$request->file('image');
            $image_name=uniqid().'.'.$image->getClientOriginalExtension();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $input['image']=$image_name;
        }
        else{
            $input['image']='brak_zdjęcia.png';
        }

       Advert::create(['userId'=>$id,'categoryId'=>$input['categoryId'],'title'=>$input['title'],'description'=>$input['description'],'cost'=>$input['cost'],'image'=>$input['image']]);
        return redirect('/');
    }
}
