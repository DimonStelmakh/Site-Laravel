<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special;

class StaticPagesController extends Controller
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
