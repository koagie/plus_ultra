<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemosController extends Controller
{
    public function catwork() {
        return view('demo.catwork');
    }
}
