<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Par_impar extends Controller
{
    public function check(Request $request): Response
    {
        $number = $request->input('numeru');
        $result = $number % 2 == 0 ? 'Numeru Par' : 'Numeru Impar';
        return response()->view('par_impar', ['mensajen' => $result, 'value' => $number]);
    }
}
