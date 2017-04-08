<?php

namespace sisRRHH\Http\Controllers;

use Illuminate\Http\Request;
use sisRRHH\Subsidio;
use sisRRHH\Http\Requests\SubsidioCreateRequest;

class SubsidioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $ruta_vista="Subsidio";
    var $ruta_controlador="subsidios";
    public function index(Request $request)
    {
        $tipo_subsidio=$request->get("tipo_subsidio");
        if (!(is_null($tipo_subsidio)))
        {
            $query=Subsidio::tiposubsidio($tipo_subsidio);
            return \View::make($this->ruta_vista.'.list',
                ["values"=>$query->get(),"total"=>$query->sum('monto'),"numero_funcionarios"=>$query->count(),"ruta_controlador"=>$this->ruta_controlador]);
        }
        else
        {
            $query=Subsidio::all();
            return \View::make($this->ruta_vista.'.list',
                ["values"=>$query,"total"=>$query->sum('monto'),"numero_funcionarios"=>$query->count(),"ruta_controlador"=>$this->ruta_controlador]);
        }
    }
    public function report(Request $request)
    {
            dd(Subsidio::select(\DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->get());
            return \View::make($this->ruta_vista.'.report',
            ["ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make($this->ruta_vista.'.new',
            ["ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubsidioCreateRequest $request)
    {
        Subsidio::create($request->all());
        return redirect($this->ruta_controlador);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \View::make($this->ruta_vista.'.show',["value"=>Subsidio::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->ruta_vista.'.update',["value"=>Subsidio::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Subsidio::find($id)->fill($request->all())->save();
        return redirect($this->ruta_controlador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subsidio::destroy($id);
        return redirect($this->ruta_controlador);
    }  //
}
