@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if(session()->has('msj'))
					<div class="alert alert-success" role="alert">
						{{ session('msj') }}
					</div>
					@endif
					@if(session()->has('errormsj'))
					<div class="alert alert-danger" role="alert">
						Error al guardar los Datos.
					</div>
					@endif

					<div class="panel panel-default">
						<div class="panel-body">
								
							<div class="col-lg-12">
								<hr>
								<h2 class="intro-text text-center">Planilla de subsidios</h2>
								<hr>
							</div>
							<div class="form-group">
									<center>
										<div class="col-lg-12">
											<img src='{{ asset("enl_con/".$value->path) }}' alt="No se encontro el archivo" style="width: 200px;height: 200px">
										</div>
									</center>

									</div>
							<div class="col-lg-12">

								<div class="box">
									<div class="form-group">
										<div class="col-lg-6">
											{!! Form::label('Monto total en planilla') !!}:
											{!! Form::label($value->monto_total) !!}
										</div>
										<div class="col-lg-6">
											{!! Form::label('Beneficiarios') !!}:
											{!! Form::label($value->beneficiarios) !!}
										</div>
										
									</div>
									<div class="form-group">
										<div class="col-lg-6">
											{!! Form::label('Descripcion', 'Descripcion') !!}:
											{!! Form::label($value->descripcion) !!}

										</div>
									</div>


									<div class="form-group">
										<div class="col-lg-5">
											{!! Form::label('Mes', 'Mes') !!}:
											{!! Form::label($value->mes) !!}
										</div>
										<div class="col-lg-5">
											{!! Form::label('Gestion', 'Gestion') !!}:
											{!! Form::label($value->gestion) !!}
										</div>
									</div>

								

								</div>				  
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection	
       
                ,"beneficiarios"
           