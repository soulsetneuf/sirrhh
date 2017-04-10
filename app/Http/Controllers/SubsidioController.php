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
            return \View::make($this->ruta_vista.'.list',
                [
                    "values"=>Subsidio::tiposubsidio($tipo_subsidio)->get(),
                    "total"=>Subsidio::tiposubsidio($tipo_subsidio)->sum('monto'),
                    "total_lactancia"=>Subsidio::tiposubsidio($tipo_subsidio)->where("tipo_subsidio","=", "Lactancia")->sum('monto'),
                    "total_prenatal"=>Subsidio::tiposubsidio($tipo_subsidio)->where("tipo_subsidio","=", "Prenatal")->sum('monto'),
                    "numero_funcionarios"=>Subsidio::tiposubsidio($tipo_subsidio)->count(),
                    "ruta_controlador"=>$this->ruta_controlador
                ]);
        }
        else
        {
            $query=Subsidio::all();
            return \View::make($this->ruta_vista.'.list',
                [
                    "values"=>Subsidio::all(),
                    "total"=>Subsidio::sum('monto'),
                    "total_prenatal"=>Subsidio::where("tipo_subsidio","=", "Prenatal")->sum('monto'),
                    "total_lactancia"=>Subsidio::where("tipo_subsidio","=","Lactancia")->sum('monto'),
                    "numero_funcionarios"=>Subsidio::count(),
                    "ruta_controlador"=>$this->ruta_controlador]);
        }
    }
    public function report(Request $request)
    {
            dd(Subsidio::select(\DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->get());
            return \View::make($this->ruta_vista.'.report',
            ["ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }
    public function pdf($id)
    {
        //return \View::make($this->ruta_vista.'.pdf',["value"=>Memorandum::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
        PDF::setHeaderCallback(function($pdf) {
            $pdf->Cell(0, 27, '', 'B', false, 'R', 0, '', 0, false, 'T', 'M');
            //$pdf->Image(asset('template/dist/img/bolivia.jpg'), 15, 10, 0, 15, 'JPG', 'https://www.minsalud.gob.bo', '', true, 150, '', false, false, 0, false, false, false);
            $pdf->SetFont('helvetica', 'B', 11);
            $pdf->Text(33,22,'Sistema de centros de rehabilitación2','R');
            $pdf->SetFont('helvetica', 'K', 10);
            //$pdf->Text(15,27,'Establecimiento: '.session('institucion')->inst_nombre);
            //$pdf->Image(asset("enl_con/".Memorandum::find($id)->path), 25, 12, 0, 12, 'JPG', 'https://www.minsalud.gob.bo', '', true, 150, 'R', false, false, 0, false, false, false);
        });
        //dd(asset("enl_con/".Memorandum::find($id)->path));
        PDF::setFooterCallback(function($pdf) {
            //$strCodSeguridad=session('institucion')->inst_codigo . '|' . session('institucion')->inst_nombre .'|' . Auth::user()->user_id;
            $pdf->SetY(-15);
            $pdf->SetFont('helvetica', 'I', 8);
            $pdf->Cell(0, 10, 'Pagina '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 'T', false, 'R', 0, '', 0, false, 'T', 'M');
            //$pdf->write2DBarcode(bcrypt('Mi super codigo'), 'PDF417', 25, 275, 150, 6, null, 'N',true);
            //$pdf->write2DBarcode($strCodSeguridad, 'PDF417', 25, 275, 150, 6, null, 'N',true);
        });
        PDF::SetTitle('Reportes');
        PDF::SetSubject('Reporte de sistema');
        PDF::SetMargins(15, 30, 15);
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('L', 'Letter');

        //PDF::Image(asset("enl_con/".Memorandum::find($id)->path), 25, 12, 0, 12, 'png', 'https://www.minsalud.gob.bo', '', true, 150, 'R', false, false, 0, false, false, false);
        //PDF::Image("http://localhost/sirrhh/public/enl_con/1222slide-1.png", 25, 12, 0, 12, 'png', 'https://www.minsalud.gob.bo', '', true, 150, 'R', false, false, 0, false, false, false);

        PDF::writeHTML(\View::make($this->ruta_vista.'.pdf',["value"=>Memorandum::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista])->render(), true, false, true, false, '');
        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','I');

        //return \View::make($this->ruta_vista.'.pdf',["value"=>Memorandum::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
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
