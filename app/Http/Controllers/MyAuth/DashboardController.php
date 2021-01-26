<?php

namespace App\Http\Controllers\MyAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        //dd(auth()->user());
        return view('index');
    }
}
