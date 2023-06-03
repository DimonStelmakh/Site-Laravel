<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalPages extends Controller
{
    public function submitted()
    {
        return view('submitted');
    }

    public function map()
    {
        return view('map');
    }
}
