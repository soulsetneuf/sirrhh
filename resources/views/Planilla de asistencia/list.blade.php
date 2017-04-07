@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              


            	<div class="panel-body">
                         @include("Planilla de asistencia.menu")
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Planillas de asistencia</h2>
            			<hr>
            		</div>
            	
            		{!! Form::open(['route' => $ruta_controlador.'.report', 'method' => 'GET']) !!}
            			<table class="table">
            				<tr>
            					<td>Gestion</td>
            					<td>
                      				{!! Form::select('gestion',config("options.gestiones"),null,['class' => 'form-control' , 'required' => 'required']) !!}
            					</td>
            					<td>
            						Mes
            					</td>
            					<td>
            							{!! Form::select('mes',config("options.meses"),null,['class' => 'form-control' , 'required' => 'required']) !!}
            					</td>
            					<td>
            							<button type="submit" class="btn btn-primary">Buscar</button>	
            					</td>
            				</tr>
            			</table>
					{!! Form::close() !!}
					
            		<div class="table table-responsive">
            			<table class="table table-striped">
            				<thead>
            					<tr>
            						<th>#</th>
            						<th>Gestion</th>
            						<th>Mes</th>
            						<th>Total en planilla</th>
            						<th>Descripcion</th>
            						<th>Archivo</th>

            					</tr>
            				</thead>
            					<tbody>
            						@foreach ($values as $value)
            						<tr class="success">
            							<td>{{ $value->id }}</td>
            							<td>{{ $value->gestion }}</td>
            							<td>{{ $value->mes }}</td>
            							<td>{{ $value->total_personal }}</td>
            							<td>{{ $value->descripcion }}</td>
            							<td>
            								<img src="enl_con/{{ $value->path }}" alt="No se encontro el archivo" style="width: 100px;height: 100px">
            							</td>
            							<td>

            							<td>
            							<div class="btn-group">
											 {!! link_to_route($ruta_controlador.'.show',$title="Ver",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"])  !!}

            								 {!! link_to_route($ruta_controlador.'.edit',$title="Modificar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning btn-xs"])  !!}

            								 {!! Form::open(['route' =>[ $ruta_controlador.'.destroy',$value->id], 'method' => 'DELETE']) !!}

                                                              

                                              <input type="submit" value="Eliminar" name="eliminar" class="btn btn-danger btn-xs">
            								 {!! Form::close() !!} 
					
										</div>

            							</td>
            						</tr>
            						@endforeach
            					</tbody>
            				</table>
            			</div>
            			<center>
            				 {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
            			</center>

            		</div>



            </div>
        </div>
    </div>
</div>
@endsection
