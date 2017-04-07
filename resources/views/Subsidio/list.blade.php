@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              


            	<div class="panel-body">
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Subsidios</h2>
            			<hr>
            		</div>
            		<div class="table table-responsive">
            			<table class="table table-striped">
            				<thead>
            					<tr>
            						<th>#</th>
            						<th>Funcionario</th>
                                    <th>Familiar</th>
                                    <th>Monto</th>
            					</tr></thead>
            					<tbody>
            						@foreach ($values as $value)
            						<tr class="success">
            							<td>{{ $value->id }}</td>
                                        <td>{{ $value->funcionario_id }}</td>
            							<td>{{ $value->familiar_id }}</td>
                                        <td>{{ $value->monto }}</td>
            							<td>

            							<div class="btn-group">
            								 {!! link_to_route($ruta_controlador.'.edit',$title="Editar",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"])  !!}

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

