<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About_usController extends Controller
{
    //
    public function about(){
        return view('pages/about_us');
    }
}
