<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //

    public function brand()
    {

    	return view('home.brandIndex.brand');
    }
}
