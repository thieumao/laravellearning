<?php

namespace App\Http\Controllers\ETS2020;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LearningController extends Controller
{
    //
    public function index()
    {
        return 'Learning Screen';
    }

    public function create()
    {
        return view('ETS2020/create');
    }

    public function store(Request $request)
    {
        dd(__METHOD__, $request->all());
        // return view('ETS2020/store');
    }

    public function update(Request $request)
    {
        dd(__METHOD__, $request->all());
        // return view('ETS2020/store');
    }
}
