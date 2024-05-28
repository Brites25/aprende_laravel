<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function naran()
    {
        return view('home', ['naran' => 'Riko']);
    }
}
