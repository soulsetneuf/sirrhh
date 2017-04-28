<?php

namespace sisRRHH\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisRRHH\funcionario;
use sisRRHH\contrato;
use PDF;


class funcionarios extends Controller
{
    /**
     * Display a listing of the resource.
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
    public function store(Request $request)
    {
       $messages=[
            'ci.required'=>'El campo ci es obligatorio.',
            'nom_com.required'=>'El campo Nombre Completo es obligatorio.'
        ];
        $this->validate($request,
            [
                'ci'=>'required',
                'nom_com'=>'required',
                'fec_nac'=>'required',
                'pro_ocu'=>'required',
                'pro'=>'required',
                'ciu'=>'required',
                'dir'=>'required',
                'n_seg_soc'=>'alpha-num',
                'tel_fij'=>'numeric',
                'tel_cel'=>'required|numeric',
                'num_lic'=>'alpha-num',
                'cor_per'=>'required|email',
                'cor_ins'=>'required|email',
                'num_cue'=>'numeric',
                'ant_ext'=>'required'
            ],$messages);
        //
        $fun=new funcionario();

        $fun->ci=$request->ci; 
        $fun->nom_com=$request->nom_com;
        $fun->sexo=$request->sex;
        $fun->fec_nac=$request->fec_nac;
        $fun->est_civ=$request->est_civ;
        $fun->pro_ocu=$request->pro_ocu;
        $fun->pais=$request->pais;
        $fun->dep=$request->dep;
        $fun->pro=$request->pro;
        $fun->ciu=$request->ciu;
        $fun->dir=$request->dir;
        $fun->n_seg_soc=$request->n_seg_soc;
        $fun->est_lab=$request->est_lab;
        $fun->fec_ina=$request->fec_ina;
        $fun->tel_fij=$request->tel_fij;
        $fun->tel_cel=$request->tel_cel;
        $fun->num_lic=$request->num_lic;
        $fun->cat_lic=$request->cat_lic;
        $fun->fec_fen_lic=$request->fec_fen_lic;
        $fun->cor_per=$request->cor_per;
        $fun->cor_ins=$request->cor_ins;
        $fun->num_cue=$request->num_cue;
        $fun->ant_ext=$request->ant_ext;

        if($fun->save())
        {
            $rs = DB::table('funcionarios')->select(DB::raw('MAX(id) as id'))->first();
            return redirect("funcionarios/");

            return redirect("contratos/$rs->id/$request->nom_com/$request->ci")->with('errormsj','Datos Actualizados Correctamente.');
        }
        else
        {
            return back()->with('errormsj','Los Datos No se Guardaron.');
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
       $funcionario=funcionario::find($id);
       // select * from funcionarios where id=$id
       
       $rs = DB::table('contratos')->where('id_dat', $id)->first();
       // select top 1 * from contratos where id_dat=$id
       if(count($rs)==1)
       {
             $contrato=contrato::find($rs->id);
            return view('mostrarfun')->with(['funcionario'=>$funcionario,'contrato'=>$contrato]);
       }
       else
       {
           return view('mostrarfun')->with(['funcionario'=>$funcionario]);  
        }  
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->ruta_vista.'.update',["value"=>funcionario::find($id),"ruta_controlador"=>$this->ruta_controlador,"ruta_vista"=>$this->ruta_vista]);
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
            'ci.required'=>'El campo ci es obligatorio.',
            'nom_com.required'=>'El campo Nombre Completo es obligatorio.'
        ];
        $this->validate($request,
            [
                'ci'=>'required',
                'nom_com'=>'required',
                'fec_nac'=>'required',
                'pro_ocu'=>'required',
                'pro'=>'required',
                'ciu'=>'required',
                'dir'=>'required',
                'n_seg_soc'=>'alpha-num',
                'tel_fij'=>'numeric',
                'tel_cel'=>'required|numeric',
                'num_lic'=>'alpha-num',
                'cor_per'=>'required|email',
                'cor_ins'=>'required|email',
                'num_cue'=>'numeric',
                'ant_ext'=>'required'
            ],$messages);
        //
        $fun=funcionario::find($id);
        $fun->ci=$request->ci; 
        $fun->nom_com=$request->nom_com;
        $fun->sexo=$request->sex;
        $fun->fec_nac=$request->fec_nac;
        $fun->est_civ=$request->est_civ;
        $fun->pro_ocu=$request->pro_ocu;
        $fun->pais=$request->pais;
        $fun->dep=$request->dep;
        $fun->pro=$request->pro;
        $fun->ciu=$request->ciu;
        $fun->dir=$request->dir;
        $fun->n_seg_soc=$request->n_seg_soc;
        $fun->est_lab=$request->est_lab;
        $fun->fec_ina=$request->fec_ina;
        $fun->tel_fij=$request->tel_fij;
        $fun->tel_cel=$request->tel_cel;
        $fun->num_lic=$request->num_lic;
        $fun->cat_lic=$request->cat_lic;
        $fun->fec_fen_lic=$request->fec_fen_lic;
        $fun->cor_per=$request->cor_per;
        $fun->cor_ins=$request->cor_ins;
        $fun->num_cue=$request->num_cue;
        $fun->ant_ext=$request->ant_ext;
        if($fun->save())
        {
            return redirect("funcionarios/$id")->with('msj','Datos Actualizados Correctamente.');
        }
        else
        {
            return back()->with('errormsj','Los Datos No se Guardaron.');
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
        funcionario::destroy($id);
        //delete funcionarios where id=$id
        return back();//atra
    }
    public function pdfList($funcionario_id)
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

        if (!(is_null($funcionario_id)))
        {
            PDF::writeHTML(\View::make
            ($this->ruta_vista.'.pdfList',
                [
                    "values"=>funcionario::id($funcionario_id)->get(),
                    "funcionario_id"=>$funcionario_id,
                    "ruta_controlador"=>$this->ruta_controlador
                ]
            )->render(), true, false, true, false, ''
            );
        }
        else
        {
            PDF::writeHTML(\View::make
            (
                $this->ruta_vista.'.pdfList',
                [
                    "values"=>funcionario::all(),
                    "funcionario_id"=>null,
                    "ruta_controlador"=>$this->ruta_controlador]
            )->render(), true, false, true, false, ''
            );
        }
        /////////////////////////////////////////////////////////////////////////////////////////////

        PDF::lastPage();
        PDF::Output('estableciminetos.pdf','D');
    }
}