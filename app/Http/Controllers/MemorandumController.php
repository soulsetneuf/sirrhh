<?php

namespace sisRRHH\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use sisRRHH\Http\Requests\MemorandumUpdateRequest;
use sisRRHH\Memorandum;
use sisRRHH\Http\Requests\MemorandumCreateRequest;
use sisRRHH\Http\Requests\Memorandum2CreateRequest;
use PDF;

class MemorandumController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $ruta_vista="Memorandum";
    var $ruta_controlador="memorandum";
    public function index(Request $request)
    {
        $notificado_id=$request->get("notificado_id");
        $tipo_de_memorandum_id=$request->get("tipo_de_memorandum_id");
        if (!(is_null($notificado_id)))
        {
            return \View::make($this->ruta_vista.'.list',
            [
                "values"=>Memorandum::listar($notificado_id,$tipo_de_memorandum_id)->get(),
                "notificado_id"=>$notificado_id,
                "tipo_de_memorandum_id"=>$tipo_de_memorandum_id,
                "ruta_controlador"=>$this->ruta_controlador
            ]
            );
        }
        else
        return \View::make
        (
            $this->ruta_vista.'.list',
            [
                "values"=>Memorandum::all(),
                "notificado_id"=>null,
                "tipo_de_memorandum_id"=>null,
                "ruta_controlador"=>$this->ruta_controlador
            ]
        );
    }
    public function pdfList($notificado_id,$tipo_de_memorandum_id)
    {
        PDF::setHeaderCallback(function($pdf) {
            $img = file_get_contents(asset("img/logo.png"));
            $pdf->Image('@'.$img,15,5,0,20);
//            $pdf->Image('@'.$img, 0, 5, 0,20, 'png', 'https://www.minsalud.gob.bo', '', true,150, 'R', false, false, 0, false, false, false);
            $pdf->SetFont('helvetica', 'I', 8);
            $pdf->Text(240,5,"Fecha de impresión:".Carbon::now()->format("d/m/Y"),'R');

            $pdf->SetFont('helvetica', 'B', 20);
            $pdf->Text(70,10,'Sistema de informaciòn de la unidad de RRHH','R');
            $pdf->SetFont('helvetica', 'K', 10);
        });
        PDF::setFooterCallback(function($pdf) {
            $pdf->SetY(-15);
            $pdf->SetFont('helvetica', 'I', 8);
            $pdf->Cell(0, 10, 'Pagina '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 'T', false, 'R', 0, '', 0, false, 'T', 'M');
            $pdf->Text(20,-12,"Usuario: ".\Auth::user()->funcionario->nombre_completo,'R');
            $pdf->Text(100,-12,"Provincia: ".\sisRRHH\Institucion::find(1)->provincia->nombre,'R');
            $pdf->Text(180,-12,"Municipio: ".\sisRRHH\Institucion::find(1)->municipio->nombre,'R');
        });
        PDF::SetTitle('Reportes');
        PDF::SetSubject('Reporte de sistema');
        PDF::SetMargins(15, 30, 15);
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('L', 'Letter');

        if (!(is_null($notificado_id)))
        {
            PDF::writeHTML(\View::make($this->ruta_vista.'.pdfList', ["values"=>Memorandum::listar($notificado_id,$tipo_de_memorandum_id)->get(), "notificado_id"=>$notificado_id, "tipo_de_memorandum_id"=>$tipo_de_memorandum_id, "ruta_controlador"=>$this->ruta_controlador])->render(), true, false, true, false, '');
        }
        else
        {
            PDF::writeHTML(\View::make
            (
                $this->ruta_vista.'.pdfList',
                [
                    "values"=>Memorandum::all(),
                    "notificado_id"=>null,
                    "tipo_de_memorandum_id"=>null,
                    "ruta_controlador"=>$this->ruta_controlador
                ]
            )->render(), true, false, true, false, ''
            );
        }
        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','D');
    }
    public function report(Request $request)
    {
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
    public function store(MemorandumCreateRequest $request)
    {
        Memorandum::create($request->all());
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
        return \View::make($this->ruta_vista.'.show',["value"=>Memorandum::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }
    public function pdf($id)
    {
        PDF::setHeaderCallback(function($pdf) {
            //$pdf->Cell(0, 27, '', 'B', false, 'R', 0, '', 0, false, 'T', 'M');
            $img = file_get_contents(asset("img/logo.png"));
            $pdf->Image('@'.$img,15,5,0,20);
//            $pdf->Image('@'.$img, 0, 5, 0,20, 'png', 'https://www.minsalud.gob.bo', '', true,150, 'R', false, false, 0, false, false, false);
            $pdf->SetFont('helvetica', 'I', 8);
            $pdf->Text(240,5,"Fecha de impresión:".Carbon::now()->format("d/m/Y"),'R');

            $pdf->SetFont('helvetica', 'B', 20);
            $pdf->Text(70,10,'Sistema de informaciòn de la unidad de RRHH','R');
            $pdf->SetFont('helvetica', 'K', 10);
        });
        PDF::setFooterCallback(function($pdf) {
            $pdf->SetY(-15);
            $pdf->SetFont('helvetica', 'I', 8);
            $pdf->Cell(0, 10, 'Pagina '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 'T', false, 'R', 0, '', 0, false, 'T', 'M');
            $pdf->Text(20,-12,"Usuario: ".\Auth::user()->funcionario->nombre_completo,'R');
            $pdf->Text(100,-12,"Provincia: ".\sisRRHH\Institucion::find(1)->provincia->nombre,'R');
            $pdf->Text(180,-12,"Municipio: ".\sisRRHH\Institucion::find(1)->municipio->nombre,'R');
        });
        PDF::SetTitle('Reportes');
        PDF::SetSubject('Reporte de sistema');
        PDF::SetMargins(15, 30, 15);
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('L', 'Letter');



        //dd(asset(Memorandum::find($id)->path));
        //dd(Memorandum::find($id)->path);
        $path=asset("enl_con/".Memorandum::find($id)->path);
        if (!@file_exists($path)) {
            // try to encode spaces on filename
            $path = str_replace(' ', '%20', $path);
             }
        $img = file_get_contents($path);
        PDF::Image('@'.$img);

        //PDF::writeHTML(\View::make($this->ruta_vista.'.pdf',["value"=>Memorandum::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista])->render(), true, false, true, false, '');

        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','D');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->ruta_vista.'.update',["value"=>Memorandum::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemorandumUpdateRequest $request, $id)
    {
        Memorandum::find($id)->fill($request->all())->save();
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
        Memorandum::destroy($id);
        return redirect($this->ruta_controlador);
    }  //
}
