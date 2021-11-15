<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function home(Request $request){
        return view('public.principal', ['path' => $request->path()]);
    }
}
