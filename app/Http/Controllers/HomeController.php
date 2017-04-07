<?php

namespace sisRRHH\Http\Controllers;

use sisRRHH\funcionario;

use sisRRHH\contrato;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        $funcionario=funcionario::all();
        return view('home')->with(['funcionario'=>$funcionario]);
    }
}
