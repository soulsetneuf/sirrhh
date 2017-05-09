
<div class="col-lg-12">
    <hr>
    <h2 class="intro-text text-center">Memorandum</h2>
    <hr>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-lg-6">
            {!! Form::label('Tipo de memorandum', 'Tipo de memorandum') !!}
            {!! Form::select('tipo_de_memorandum_id',sisRRHH\TipoDeMemorandum::pluck("tipo","id"),null,['class' => 'form-control' ,'id'=>'tipo_de_memorandum_id', 'required' => 'required']) !!}
            {!! link_to_route('tipos_de_memorandum.create',$title="Nuevo memorandum",$parameters="", $attributes=[""])  !!}
        </div>
        <div class="col-lg-6">
            {!! Form::label('Numero de memorandum') !!}
            {!! Form::text('numero_memorandum', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Form::label('Ascenso/Decenso') !!}
        {!! Form::select("acensos_decensos",config("options.acensos_decensos"),null,['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-lg-6">
            {!! Form::label('Fecha asignacion del memorandum') !!}
            {!! Form::date('fecha_asignacion', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01","max"=>\Carbon\Carbon::now()->format('Y-m-d')]) !!}
        </div>
            <div class="col-lg-6" id="content">
                {!! Form::label('Fecha fin de designacion') !!}
                {!! Form::date('fecha_designacion', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01"]) !!}
            </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-lg-6">
            {!! Form::label('Numero de tomo') !!}
            {!! Form::text('numero_tomo', null, ['class' => 'form-control' , 'required' => 'required']) !!}

        </div>
        <div class="col-lg-6">
            {!! Form::label('Ubicacion fisica') !!}
            {!! Form::text('ubicacion_fisica', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-lg-6">
            {!! Form::label('Notificador/a') !!}
            {!! Form::text("rrhh","Unidad de Recursos Humanos",['class' => 'form-control','readonly'=>true]) !!}
        </div>
        <div class="col-lg-6">
            {!! Form::label('Notificado/a') !!}
            {!! Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' ,'id'=>'notificado_id' ,'required' => 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-lg-6">
            {!! Form::label('Lugar') !!}
            {!! Form::text('lugar', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
        <div class="col-lg-6">
            {!! Form::label('Motivo') !!}
            {!! Form::text('motivo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-lg-12">
            {!! Form::label('Archivo', 'Archivo') !!}
            {!! Form::file('path') !!}
        </div>
    </div>
</div>
<br/>
@include("Boton.boton")

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('#notificado_id').change(function(){
            $.get("{{ url('tipo_funcionario')}}",
                    { option: $(this).val() },
                    function(data) {
                        console.log(data);
                        if (data=="Permanente")
                            document.getElementById("content").style.display = "none";
                        else
                            document.getElementById("content").style.display = "block";
                    });
        });
        $('#tipo_de_memorandum_id').change(function(){
            var e = document.getElementById("tipo_de_memorandum_id");
            var data=e.options[e.selectedIndex].text;
            if (data=="Llamada de atencion" || data=="Memorandum de agradacimiento" || data=="Continuidad")
                document.getElementById("content").style.display = "none";
            else
                document.getElementById("content").style.display = "block";
        });
    });
</script>