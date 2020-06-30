<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function halo(){
        return view ('halo');
    }

    public function halo_post(Request $request){
        return view ('halo', ['data' => $request]);
    }

}
