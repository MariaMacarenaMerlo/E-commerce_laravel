<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienessomosController extends Controller
{
    public function quienessomos()
    {
        return view('quienes-somos');
    }
}
