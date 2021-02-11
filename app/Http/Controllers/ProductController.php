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
//dd($ad);

            return view('category',compact('ad','categoriesCount','search_category','x'));

        }

        $search_text = Validator::make($request->all(), [
           'q' => 'required|min:3|max:255',
       ])->validate();
       $querry=$search_text['q'];
       $search_text=$querry;

        //$search_text = $request->get('q');

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
//dd($ad);

            return view('category',compact('ad','categoriesCount','search_text','search_category'));
        }


    }

    public function add(){
        $categories=Category::all();

        return view('addproduct',compact('categories'));
    }

    public function store(Request $request){
        $input=$request->all();
        $catid=$input['categoryId'];
        $id=Auth::id();
        Advert::create($input);
        Advert::create([$id=>'userId', $catid=>'categoryId',$input['title']=>'title',$input['description']=>'description',$input['cost']=>'cost']);
        return redirect('/');
    }
}
