<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacaparteController extends Controller
{
    public function index()
    {
        return view('facaparte');
    }

    public function formFacaparte()
    {
        return view('parts.facaparte.facaparteform1');
    }
}
