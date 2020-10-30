<?php

namespace App\Http\Controllers\ETS2020;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
}
