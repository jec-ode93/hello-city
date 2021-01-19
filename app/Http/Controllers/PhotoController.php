<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\ImagesRequest;

class PhotoController extends Controller
{
    //
    public function create(){
        return view('photo');
    }

    public function store(ImagesRequest $request){
        $request->image->store(config('image.path'), 'public');
        return view('photo_ok');
    }
}
