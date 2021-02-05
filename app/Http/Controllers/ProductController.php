<?php
namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{


    public function search(Request $request){

       // $search_text = Validator::make($request->all(), [
     //       'q' => 'required|min:3|max:255',
     //   ])->validate();
      //  $querry=$search_text['q'];

        $search_text = $request->get('q');
        $search_category=$request->get('k');

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

            return view('category',compact('ad'),compact('categoriesCount'));

    }
}
