<?php

namespace sisRRHH\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use sisRRHH\Http\Requests\PlanillaDeAsistenciaCreateRequest;
use sisRRHH\PlanillaDeAsistencia;
use JavaScript;
use PDF;


class PlanillaDeAsistenciaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $ruta_vista="Planilla de asistencia";
    var $ruta_controlador="planillas_de_asistencia";
    public function index(Request $request)
    {
        $gestion=$request->get("gestion");
        $mes=$request->get("mes");
        if (!(is_null($gestion)) || !(is_null($mes)))
        {
            return \View::make
            (
                $this->ruta_vista.'.list',
                [
                    "values"=>PlanillaDeAsistencia::gestion($gestion)->mes($mes)->get(),
                    "gestion"=>$gestion,
                    "mes"=>$mes,
                    "ruta_controlador"=>$this->ruta_controlador
                ]
            );
        }
        else
            return \View::make(
                $this->ruta_vista.'.list',
                [
                    "values"=>PlanillaDeAsistencia::all(),
                    "gestion"=>null,
                    "mes"=>null,
                    "ruta_controlador"=>$this->ruta_controlador
                ]
            );
    }
    public function pdfList($gestion,$mes)
    {
        PDF::setHeaderCallback(function($pdf) {
            $img = file_get_contents(asset("img/logo.png"));
            $pdf->Image('@'.$img,15,5,0,20);
//            $pdf->Image('@'.$img, 0, 5, 0,20, 'png', 'https://www.minsalud.gob.bo', '', true,150, 'R', false, false, 0, false, false, false);
            $pdf->SetFont('helvetica', 'I', 8);
            $pdf->Text(240,5,"Fecha de impresión:".Carbon::now()->format("d/m/Y"),'R');

            $pdf->SetFont('helvetica', 'B', 20);
            $pdf->Text(70,10,'Planilla de asistencia','R');
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

        if (!(is_null($gestion)) || !(is_null($mes)))
        {
            PDF::writeHTML
            (
                \View::make
                (
                    $this->ruta_vista.'.pdfList',
                    [
                        "values"=>PlanillaDeAsistencia::gestion($gestion)->mes($mes)->get(),
                        "gestion"=>$gestion,
                        "mes"=>$mes,
                        "ruta_controlador"=>$this->ruta_controlador
                    ]
                )->render(), true, false, true, false, ''
            );
        }
        else
            PDF::writeHTML
            (
                \View::make
                (
                    $this->ruta_vista.'.pdfList',
                    [
                        "values"=>PlanillaDeAsistencia::all(),
                        "gestion"=>null,
                        "mes"=>null,
                        "ruta_controlador"=>$this->ruta_controlador
                    ]
                )->render(), true, false, true, false, ''
            );
        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','D');
    }
    public function report(Request $request)
    {  
         $gestion=$request->get("gestion");
         $mes=$request->get("mes");

         $nombre=PlanillaDeAsistencia::listar($gestion,$mes)->get()->toArray();
         //dd($nombre);
         $mes=array_column($nombre, 'mes');
         $nombre=array_column($nombre, 'total_personal');
         $hoy=\Carbon\Carbon::now()->format('Y-m-d');

         JavaScript::put([
        'nombre' => $nombre,
        'mes' => $mes,
        "hoy" => $hoy
        ]);
        
        return \View::make($this->ruta_vista.".report",["ruta_controlador"=>$this->ruta_controlador]);
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

        PDF::writeHTML(\View::make($this->ruta_vista.'.pdf',["value"=>PlanillaDeAsistencia::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista])->render(), true, false, true, false, '');


        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','D');
    }

    public function ver()
    {   
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
    public function store(PlanillaDeAsistenciaCreateRequest $request)
    {
        PlanillaDeAsistencia::create($request->all());
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
        return \View::make($this->ruta_vista.'.show',["value"=>PlanillaDeAsistencia::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->ruta_vista.'.update',["value"=>PlanillaDeAsistencia::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
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
        PlanillaDeAsistencia::find($id)->fill($request->all())->save();
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
        PlanillaDeAsistencia::destroy($id);
        return redirect($this->ruta_controlador);
    }  //
}
