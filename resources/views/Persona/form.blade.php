<div class="col-lg-12">
    <hr>
    <h2 class="intro-text text-center">Persona</h2>
    <hr>
</div>
<div class="form-group">
    <div class="col-lg-4">
        {!! Form::label('Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="col-lg-4">
        {!! Form::label('Apellido Paterno') !!}
        {!! Form::text('apellido_paterno', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="col-lg-4">
        {!! Form::label('Apellido Materno') !!}
        {!! Form::text('apellido_materno', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-lg-6">
        {!! Form::label('CI') !!}
        {!! Form::text('"ci"', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('Sexo') !!}
        {!! Form::select('sexo',config("options.sexo"),null,['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-lg-6">
        {!! Form::label('Fecha de nacimiento') !!}
        {!! Form::date('fecha_nacimiento', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01","max"=>\Carbon\Carbon::now()->format('Y-m-d')]) !!}
    </div>

    <div class="col-lg-6">
        {!! Form::label("Estado civil") !!}}
        {!! Form::select("est_civil",config("options.estado_civil"),null,["class"=>"form-control","required"=>"required"]) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-lg-6">
        {!! Form::label('Direccion') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('Telefono') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
</div>
{{ Form::label(" ") }}
@include("Boton.boton")