<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers;

class MyController extends Controller
{
    public function index(){
        return view('index');
    }

}
