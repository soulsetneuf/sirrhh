<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Planilla de sueldo</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group">
						<div class="col-lg-6">
						{!! Form::label('Total personas en planilla', 'Total personas en planilla') !!}
                      {!! Form::text('total_personal', null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-6">
						{!! Form::label('Monto total en planilla', 'Monto total en planilla') !!}
                      {!! Form::text('monto_total', null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-lg-6">
                            {!! Form::label('Ubicacion fisica') !!}
                            {!! Form::text('ubicacion_fisica', null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-6">
                            {!! Form::label('Descripcion', 'Descripcion') !!}
                            {!! Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
					</div>


					<div class="form-group">
						<div class="col-lg-5">
					   	{!! Form::label('Mes', 'Mes') !!}
                      	{!! Form::select('mes',config("options.meses"),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-5">
					   	{!! Form::label('Gestion', 'Gestion') !!}
                      	{!! Form::select('gestion',config("options.gestiones"),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-5">
					   	{!! Form::label('Archivo', 'Archivo') !!}
                      	{!! Form::file('path') !!}
						</div>
					</div>
				</div>
                @include("Boton.boton")
		</div>

	</div>
</div>