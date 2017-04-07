<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Subsidio</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group">
						<div class="col-lg-6">
							{!! Form::label('Funcionario') !!}
							{!! Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'true',"id"=>"funcionario_id"]) !!}
						</div>
						<br>
						<div class="col-lg-6">
							{!! Form::label('Familiar') !!}
							{!! Form::select('familiar_id',sisRRHH\Familiar::pluck("tipo_parentesco","id"),null,['class' => 'form-control' , 'required' => 'true',"id"=>"familiar_id"]) !!}
                      </div>
					</div>

					<div class="form-group">
						<div class="col-lg-6">
							{!! Form::label('Tipo de subsidio') !!}
							{!! Form::select('tipo_subsidio',config('options.tipo_subsidio'),null,['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="form-group col-lg-6">
						  {!! Form::label("Monto") !!}
	                      {!! Form::text("monto", null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="form-group col-lg-6">
						  {!! Form::label("Total") !!}
	                      {!! Form::text("total", null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="form-group col-lg-6">
						  {!! Form::label("Numero de asignacion") !!}
	                      {!! Form::text("numero_asignacion", null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="form-group col-lg-6">
						  {!! Form::label("Observaciones") !!}
	                      {!! Form::text("observaciones", null, ['class' => 'form-control' , 'required' => 'required']) !!}
						</div>
						<div class="form-group col-lg-6">
						</div>
					</div>
				</div>				  
		</div>

	</div>
</div>