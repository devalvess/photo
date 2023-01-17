<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function photo(Request $request)
    {
        $request->photo->storeAs('public','file.jpg');
    }
 
}
