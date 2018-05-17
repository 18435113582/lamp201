<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    //
    public function index()
    {
    	return view('home.index',['title'=>'测试页']);
    }
}
