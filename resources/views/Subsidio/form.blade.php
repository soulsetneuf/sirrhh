
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Subsidio</h2>
			<hr>
		</div>

					<div class="form-group">
						<div class="col-lg-6">
							{!! Form::label('Funcionario') !!}
							{!! Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'true',"id"=>"funcionario_id"]) !!}
                            {!! link_to_route('funcionarios.create',$title="Nuevo funcionario",$parameters="", $attributes=[""])  !!}
						</div>
						<br>
						<div class="col-lg-6">
							{!! Form::label('Familiar') !!}
                            {!! Form::select('familiar_id',
                                DB::table('familiares')->join('personas', 'personas.id', '=', 'familiares.familiar_id')->pluck("personas.ci","familiares.id"),
							    null,['class' => 'form-control' , 'required' => 'true',"id"=>"familiar_id"]) !!}
                            {!! link_to_route('familiares.create',$title="Nuevo familiar",$parameters="", $attributes=[""])  !!}
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
                    <div class="col-md-12">
                        @include("Boton.boton")
                    </div>