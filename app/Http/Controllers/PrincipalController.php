<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function home(){
        return view('public.principal');
    }

    public function about(){
        return view('public.about');
    }

    public function services(){
        return view('public.services');
    }
}
