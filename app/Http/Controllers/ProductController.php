<?php
namespace App\Http\Controllers;


use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{


    public function search(Request $request){

        $search_text = Validator::make($request->all(), [
            'q' => 'required|min:3|max:255',
        ])->validate();
        $querry=$search_text['q'];

        $ad=Advert::where('title','LIKE','%'.$querry.'%')
            ->paginate(6);

        $categoriesCount=Advert::where('title','LIKE','%'.$querry.'%')
            ->select('categoryId',Advert::raw('count(*) as ct'))
            ->groupBy('categoryId')
            ->get();


            return view('category',compact('ad'),compact('categoriesCount'));

    }
}
