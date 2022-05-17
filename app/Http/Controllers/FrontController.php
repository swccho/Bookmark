<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function Home (Request $request){
        return view('Front.Home');
    }
}
