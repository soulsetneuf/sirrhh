<div class="col-lg-12">
    <hr>
    <h2 class="intro-text text-center">Familiares</h2>
    <hr>
</div>
<div class="form-group">
    <div class="col-lg-6">
        {!! Form::label('Funcionario') !!}
        {!! Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required',"id"=>"funcionario_id"]) !!}
        {!! link_to_route('funcionarios.create',$title="Nuevo funcionario",$parameters="", $attributes=[""])  !!}
    </div>
    <br>

    <div class="col-lg-6">
        {!! Form::label('Persona') !!}
        {!! Form::select('familiar_id',sisRRHH\Persona::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required',"id"=>"familiar_id"]) !!}
        {!! link_to_route('personas.create',$title="Nuevo persona",$parameters="", $attributes=[""])  !!}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-12">
        {!! Form::label('Tipo de parentesco') !!}
        {!! Form::select('tipo_parentesco',config('options.tipo_parentesco'),null,['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
</div>
{{ Form::label(" ") }}
@include("Boton.boton")
