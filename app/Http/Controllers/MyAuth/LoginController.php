<?php

namespace App\Http\Controllers\MyAuth;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function index()
    {

        return view('myauth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required' // confirmed work with [name]_confirmation
            ]);

        if (!auth()->attempt($request->only('email','password')))
        {
            return back()->with('status','Invalid login details');
        }
       /* auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);*/

        //dd('ok');

        return redirect()->route('index');
    }
}
