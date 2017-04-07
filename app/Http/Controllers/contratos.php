<?php

namespace sisRRHH\Http\Controllers;

use Illuminate\Http\Request;

use sisRRHH\contrato;

use Storage;

class contratos extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return "Mensaje desde el controlador contratos";
          return redirect('/home');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_dat,$nombre,$ci)
    {
            return view('insertarcon',['id_dat' => $id_dat,'nombre'=>$nombre,'ci'=>$ci]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages=[
            'item.required'=>'El campo ITEM es obligatorio.',
            'cargo.required'=>'El campo de Cargo es obligatorio.',
            'hab_bas.required'=>'El campo del Haber Basico es obligatorio.'
        ];
        $this->validate($request,
            [
                'item'=>'required',
                'cargo'=>'required',
                'hab_bas'=>'required',
                'sec_tra'=>'required',
                'tip_fun'=>'required',
                'enc_con'=>'required',
                'ase_leg'=>'required',
                'enl_con'=>'required'
            ],$messages);

        $con=new contrato();
        $con->id_dat=$request->id_dat;
        $con->item=$request->item;
        $con->cargo=$request->cargo;
        $con->hab_bas=$request->hab_bas;
        $con->fec_ini=$request->fec_ini;
        $con->fec_con=$request->fec_con;
        $con->des_ubi=$request->des_ubi;
        $con->sec_tra=$request->sec_tra;
        $con->tip_fun=$request->tip_fun;
        $con->enc_con=$request->enc_con;
        $con->ase_leg=$request->ase_leg;
        $con->obs=$request->obs;

       $doc=$request->file('enl_con');
        $file_route=$request->datos.'.pdf';
        Storage::disk('enl_con')->put($file_route, file_get_contents($doc->getRealPath()));
        $con->enl_con=$file_route;
        
        if($con->save())
        {
            return redirect('/home')->with('msj','Datos Guardados.');
        }
        else
        {
            return back()->with('errormsj','Los Datos del contrato no se Guardaron.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contrato=contrato::find($id);
        return view('modificarcon')->with(['contrato'=>$contrato]);
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
        $messages=[
            'item.required'=>'El campo ITEM es obligatorio.',
            'cargo.required'=>'El campo de Cargo es obligatorio.',
            'hab_bas.required'=>'El campo del Haber Basico es obligatorio.'
        ];
        $this->validate($request,
            [
                'item'=>'required',
                'cargo'=>'required',
                'hab_bas'=>'required',
                'sec_tra'=>'required',
                'tip_fun'=>'required',
                'enc_con'=>'required',
                'ase_leg'=>'required',
                'enl_con'=>'required'
            ],$messages);

        $con=contrato::find($id);
        $con->id_dat=$request->id_dat;
        $con->item=$request->item;
        $con->cargo=$request->cargo;
        $con->hab_bas=$request->hab_bas;
        $con->fec_ini=$request->fec_ini;
        $con->fec_con=$request->fec_con;
        $con->des_ubi=$request->des_ubi;
        $con->sec_tra=$request->sec_tra;
        $con->tip_fun=$request->tip_fun;
        $con->enc_con=$request->enc_con;
        $con->ase_leg=$request->ase_leg;
        $con->obs=$request->obs;

        $doc=$request->file('enl_con');
        $file_route=$request->enl;

        Storage::disk('enl_con')->delete($request->enl);
        Storage::disk('enl_con')->put($file_route, file_get_contents($doc->getRealPath()));

        $con->enl_con=$file_route;
        
        if($con->save())
        {
            return redirect("funcionarios/$request->id_dat")->with('msj','Datos Actualizados Correctamente.');
        }
        else
        {
            return back()->with('errormsj','Los Datos del contrato no se Guardaron.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
