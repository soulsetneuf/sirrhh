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
    var $ruta_vista="Funcionario";
    var $ruta_controlador="funcionarios";
    public function index(Request $request)
    {
        //Vista funcionario anteriormente
        //return view('funcionarios.insertarfun');
        $funcionario_id=$request->get("funcionario_id");
        if (!(is_null($funcionario_id)))
        {
            return \View::make($this->ruta_vista.'.list',
                [
                    "values"=>funcionario::id($funcionario_id)->get(),
                    "funcionario_id"=>$funcionario_id,
                    "ruta_controlador"=>$this->ruta_controlador
                ]);
        }
        else
        {
            return \View::make($this->ruta_vista.'.list',
                [
                    "values"=>funcionario::all(),
                    "funcionario_id"=>null,
                    "ruta_controlador"=>$this->ruta_controlador]);
        }
    }
}
