<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Memorandum</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group">
						<div class="col-lg-6">
								{!! Form::label('Tipo de memorandum', 'Tipo de memorandum') !!}
	                    		{!! Form::select('tipo_de_memorandum_id',sisRRHH\TipoDeMemorandum::pluck("tipo","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
								{!! link_to_route('tipos_de_memorandum.create',$title="Nuevo memorandum",$parameters="", $attributes=[""])  !!}

						</div>
						<br>
						<div class="col-lg-6">
								{!! Form::label('Numero de memorandum') !!}
                     			{!! Form::text('numero_memorandum', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      </div>
						
					</div>
					<div class="form-group">
						<div class="col-lg-6">
							{!! Form::label('Fecha asignacion del memorandum') !!}
							{!! Form::date('fecha_asignacion', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01","max"=>\Carbon\Carbon::now()->format('Y-m-d')]) !!}
	
						</div>
						<div class="col-lg-6">
							{!! Form::label('Fecha fin de designacion') !!}
							{!! Form::date('fecha_designacion', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01","max"=>\Carbon\Carbon::now()->format('Y-m-d')]) !!}

						</div>
					</div>

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



					<div class="form-group">
						<div class="col-lg-5">
							{!! Form::label('Notificador/a') !!}
							{!! Form::select('notificador_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-5">
							{!! Form::label('Notificado/a') !!}
							{!! Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
					</div>


					<div class="form-group">
						<div class="col-lg-5">
							{!! Form::label('Lugar') !!}
							{!! Form::text('lugar', null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="col-lg-5">
							{!! Form::label('Motivo') !!}
							{!! Form::text('motivo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
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