<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    // home page function
    function homePage(){
        return view('page.home');
    }

    // documentation page function
    function documentationPage(){
        return view('page.documentation');
    }

}
