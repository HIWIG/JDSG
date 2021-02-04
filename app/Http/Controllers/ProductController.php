<?php
namespace App\Http\Controllers;


use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function search(Request $request){
        //$search_text=$_GET['q'];
        $search_text = $request->get('q');
        $ad=Advert::where('title','LIKE','%'.$search_text.'%')->paginate(6);
        //$ad=DB::table('adverts')->where('title','LIKE','%'.$search_text.'%')->get();
        //$ad=Advert::all();

        //$a= DB::table('adverts')->select('title')->get();

        return view('category',compact('ad'));
    }
}
