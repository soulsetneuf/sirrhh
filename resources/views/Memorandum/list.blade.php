@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              


            	<div class="panel-body">
                @include("Memorandum.menu")
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Memorandum</h2>
            			<hr>
            		</div>


					{!! Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']) !!}
					<table class="table">
						<tr>
							<td>CI Notificado </td>
							<td>
								{!! Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
							</td>
                            <td>Tipo de memorandum </td>
                            <td>
                                {!! Form::select('tipo_de_memorandum_id',array_add(sisRRHH\TipoDeMemorandum::pluck("tipo","id"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']) !!}
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
            						<th>Numero Memorandum</th>
            						<th>Fecha Asignacion</th>
            						<th>Notificador</th>
            						<th>Notificado</th>

            					</tr>
            				</thead>
            					<tbody>
            						@foreach ($values as $value)
            						<tr class="success">
            							<td>{{ $value->id }}</td>
            							<td>{{ $value->numero_memorandum }}</td>
            							<td>{{ $value->fecha_asignacion }}</td>
            							<td>{{ $value->notificador->ci }}</td>
										<td>{{ $value->notificado->ci }}</td>
                                        <td>
                                            <div class="btn-group">
                                                {!! link_to_route($ruta_controlador.'.show',$title="Ver",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"])  !!}

                                                {!! link_to_route($ruta_controlador.'.edit',$title="Editar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning btn-xs"])  !!}

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