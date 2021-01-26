<?php

namespace App\Http\Controllers\MyAuth;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

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

        if (!auth()->attempt($request->only('email','password'),$request->remember))
        {
            return back()->with('status','Nieprawidłowe dane logowania.');
        }
       /* auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);*/

        //dd('ok');

        return redirect()->route('index');
    }
}
