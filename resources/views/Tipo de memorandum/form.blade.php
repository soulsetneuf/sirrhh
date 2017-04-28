<div class="col-lg-12">
    <hr>
    <h2 class="intro-text text-center">Tipos de memorandum</h2>
    <hr>
</div>
<div class="col-lg-12">

    <div class="box">
        <div class="form-group col-lg-12">
            {!! Form::label('Tipo', 'Tipo') !!}
            {!! Form::text('tipo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
    </div>
    @include("Boton.boton")
</div>
