<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class SpaController extends Controller
{
    public function index() {
        return view('spa.index');
    }

    public function portfolio() {
        return view('spa.portfolio');
    }
}
