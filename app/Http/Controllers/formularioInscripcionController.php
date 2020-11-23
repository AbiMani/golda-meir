<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioInscripcionController extends Controller
{
    public function index()
    {
        return view('formularioInscripcion');
    }
}
