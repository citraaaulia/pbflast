<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diajukanController extends Controller
{
    public function index(){
        return view('diajukan');
    }
}
