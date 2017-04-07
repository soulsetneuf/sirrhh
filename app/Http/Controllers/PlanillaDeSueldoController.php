<?php

namespace sisRRHH\Http\Controllers;

use Illuminate\Http\Request;
use sisRRHH\PlanillaDeSueldo;
use sisRRHH\Http\Requests\PlanillaDeSueldoCreateRequest;
use JavaScript;

class PlanillaDeSueldoController extends Controller
{
   
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $ruta_vista="Planilla de sueldo";
    var $ruta_controlador="planillas_de_sueldos";
    public function index(Request $request)
    {
        $gestion=$request->get("gestion");
        $mes=$request->get("mes");
        if (!(is_null($gestion)) || !(is_null($mes)))
        {

                  return \View::make($this->ruta_vista.'.list',
            ["values"=>PlanillaDeSueldo::gestion($gestion)->mes($mes)->get(),"ruta_controlador"=>$this->ruta_controlador]);
                  }
        else
        return \View::make($this->ruta_vista.'.list',
            ["values"=>PlanillaDeSueldo::all(),"ruta_controlador"=>$this->ruta_controlador]);
    }

    public function report(Request $request)
    {  

         $gestion=$request->get("gestion");
         $mes=$request->get("mes");
        
         $nombre=PlanillaDeSueldo::listar($gestion,$mes)->get()->toArray();
         //dd($nombre);
         $mes=array_column($nombre, 'mes');
         $nombre=array_column($nombre, 'monto_total');
         $hoy=\Carbon\Carbon::now()->format('Y-m-d');

         JavaScript::put([
        'nombre' => $nombre,
        'mes' => $mes,
        "hoy" => $hoy
        ]);
        
        return \View::make($this->ruta_vista.".report",["ruta_controlador"=>$this->ruta_controlador]);
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
    public function store(PlanillaDeSueldoCreateRequest $request)
    {
        PlanillaDeSueldo::create($request->all());
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
        return \View::make($this->ruta_vista.'.show',["value"=>PlanillaDeSueldo::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->ruta_vista.'.update',["value"=>PlanillaDeSueldo::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
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
        PlanillaDeSueldo::find($id)->fill($request->all())->save();
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
        PlanillaDeSueldo::destroy($id);
        return redirect($this->ruta_controlador);
    }
}
