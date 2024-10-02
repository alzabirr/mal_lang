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
    function docPage(){
        return view('page.doc');
    }

}
