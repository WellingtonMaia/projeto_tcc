<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('financial');
    }

    public function create(){

    }


    public function edit(){

    }


    public function delete(){


    }
}
