<?php

namespace sisRRHH\Http\Controllers;

use Illuminate\Http\Request;
use sisRRHH\Contrato;
use sisRRHH\Http\Requests\ContratoCreateRequest;
use PDF;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $ruta_vista="Contrato";
    var $ruta_controlador="contratos";
    public function index(Request $request)
    {
        return \View::make($this->ruta_vista.'.list',
            ["values"=>Contrato::all(),"ruta_controlador"=>$this->ruta_controlador]);
        $notificado_id=$request->get("notificado_id");
        $tipo_de_memorandum_id=$request->get("tipo_de_memorandum_id");
        if (!(is_null($notificado_id)))
        {
            return \View::make($this->ruta_vista.'.list',
                ["values"=>Contrato::listar($notificado_id,$tipo_de_memorandum_id)->get(),"ruta_controlador"=>$this->ruta_controlador]);
        }
        else
            return \View::make($this->ruta_vista.'.list',
                ["values"=>Contrato::all(),"ruta_controlador"=>$this->ruta_controlador]);
    }
    public function report(Request $request)
    {
        dd(Contrato::select(\DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->get());
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
    public function store(ContratoCreateRequest $request)
    {
        Contrato::create($request->all());
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
        return \View::make($this->ruta_vista.'.show',["value"=>Contrato::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }
    public function pdf($id)
    {
        //return \View::make($this->ruta_vista.'.pdf',["value"=>Contrato::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
        PDF::setHeaderCallback(function($pdf) {
            $pdf->Cell(0, 27, '', 'B', false, 'R', 0, '', 0, false, 'T', 'M');
            //$pdf->Image(asset('template/dist/img/bolivia.jpg'), 15, 10, 0, 15, 'JPG', 'https://www.minsalud.gob.bo', '', true, 150, '', false, false, 0, false, false, false);
            $pdf->SetFont('helvetica', 'B', 11);
            $pdf->Text(33,22,'Sistema de centros de rehabilitación2','R');
            $pdf->SetFont('helvetica', 'K', 10);
            //$pdf->Text(15,27,'Establecimiento: '.session('institucion')->inst_nombre);
            //$pdf->Image(asset("enl_con/".Contrato::find($id)->path), 25, 12, 0, 12, 'JPG', 'https://www.minsalud.gob.bo', '', true, 150, 'R', false, false, 0, false, false, false);
        });
        //dd(asset("enl_con/".Contrato::find($id)->path));
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

        PDF::Image(asset("enl_con/".Contrato::find($id)->path), 25, 12, 0, 12, 'png', 'https://www.minsalud.gob.bo', '', true, 150, 'R', false, false, 0, false, false, false);
        //PDF::Image("http://localhost/sirrhh/public/enl_con/1222slide-1.png", 25, 12, 0, 12, 'png', 'https://www.minsalud.gob.bo', '', true, 150, 'R', false, false, 0, false, false, false);

        PDF::writeHTML(\View::make($this->ruta_vista.'.pdf',["value"=>Contrato::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista])->render(), true, false, true, false, '');
        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','I');

        //return \View::make($this->ruta_vista.'.pdf',["value"=>Contrato::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->ruta_vista.'.update',["value"=>Contrato::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
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
        Contrato::find($id)->fill($request->all())->save();
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
        Contrato::destroy($id);
        return redirect($this->ruta_controlador);
    }  //
}
