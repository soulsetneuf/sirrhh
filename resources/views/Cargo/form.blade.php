<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Tipos de contrato</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group col-lg-12">
					  {!! Form::label('Nombre', 'Nombre') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
					</div>
				</div>
                @include("Boton.boton")
		</div>

	</div>
</div>
