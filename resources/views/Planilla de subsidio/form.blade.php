
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Planilla de subsidios</h2>
			<hr>
		</div>
					<div class="form-group">
						<div class="col-lg-6">
							  {!! Form::label('Beneficiarios', 'Beneficiarios') !!}
                      {!! Form::text('beneficiarios', null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-6">
						{!! Form::label('Monto Total', 'Monto Total') !!}
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
						<div class="col-lg-6">
					   	{!! Form::label('Mes', 'Mes') !!}
                      	{!! Form::select('mes',config("options.meses"),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-6">
					   	{!! Form::label('Gestion', 'Gestion') !!}
                      	{!! Form::select('gestion',config("options.gestiones"),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
					   	{!! Form::label('Archivo', 'Archivo') !!}
                      	{!! Form::file('path') !!}
						</div>
					</div>
        {{ Form::label(" ") }}
                @include("Boton.boton")