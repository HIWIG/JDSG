<?php

namespace App\Http\Controllers\MyAuth;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('myauth.register');
    }

    public function store(Request $request)
    {
        //dd($request); -- special information about request
        //dd($request->get('email'));
        //dd($request->email);

        // validation
        $this->validate($request,
            [
                //'name'=>['required','max:255'],
                'name'=>'required|max:255',
                'surname'=>'required|max:255',
                'username'=>'required|max:255',
                'email'=>'required|email|max:255',
                'password'=>'required|confirmed' // confirmed work with [name]_confirmation
            ]);

        User::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        // sign in

        //auth()->user(); //null
        auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        // sign the user in

        // redirect

        return redirect()->route('dashboard');
    }
}
