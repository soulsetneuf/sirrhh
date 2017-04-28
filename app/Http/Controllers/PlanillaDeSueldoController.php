<?php

namespace sisRRHH\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use sisRRHH\PlanillaDeSueldo;
use sisRRHH\Http\Requests\PlanillaDeSueldoCreateRequest;
use JavaScript;
use PDF;

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

                  return \View::make(
                      $this->ruta_vista.'.list',
                      [
                          "values"=>PlanillaDeSueldo::gestion($gestion)->mes($mes)->get(),
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
                "values"=>PlanillaDeSueldo::all(),
                "gestion"=>null,
                "mes"=>null,
                "ruta_controlador"=>$this->ruta_controlador]
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
            $pdf->Text(70,10,'Planilla de sueldos','R');
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
                        "values"=>PlanillaDeSueldo::gestion($gestion)->mes($mes)->get(),
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
                        "values"=>PlanillaDeSueldo::all(),
                        "gestion"=>null,
                        "mes"=>null,
                        "ruta_controlador"=>$this->ruta_controlador
                    ]
                )->render(), true, false, true, false, ''
            );
        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('planilla_de_sueldo.pdf','D');
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

        //PDF::writeHTML(\View::make($this->ruta_vista.'.pdf',["value"=>PlanillaDeSueldo::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista])->render(), true, false, true, false, '');
        $path=asset("enl_con/".PlanillaDeSueldo::find($id)->path);
        if (!@file_exists($path)) {
            // try to encode spaces on filename
            $path = str_replace(' ', '%20', $path);
        }
        $img = file_get_contents($path);
        PDF::Image('@'.$img);


        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','D');

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
        $gestion=$request->input("gestion");
        $mes=$request->input("mes");
        if(PlanillaDeSueldo::where('mes', '=', $mes)->where('gestion', '=', $gestion)->exists())
        {
            $request->session()->flash('msj', 'El campo mes y gestion ya han sido registrados anteriormente');
            return redirect($this->ruta_controlador."/create");
        }
        else
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
