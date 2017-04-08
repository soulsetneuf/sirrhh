@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
            	<div class="panel-body">
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Subsidios</h2>
            			<hr>
            		</div>
                    {!! Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']) !!}
                    <table class="table">
                        <tr>
                            <td>Tipo de subsidio </td>
                            <td>
                                {!! Form::select('tipo_subsidio',array_add(config("options.tipo_subsidio"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']) !!}
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </td>
                        </tr>
                    </table>
                    {!! Form::close() !!}
                    <div class="col-lg-3">
                        Numero de funcionarios : {{  $numero_funcionarios  }}
                    </div>
                    <div class="col-lg-3">
                        Total Prenatal : {{  $total_prenatal  }}
                    </div>
                    <div class="col-lg-3">
                        Total Lactancia : {{  $total_lactancia  }}
                    </div>
                    <div class="col-lg-3">
                        Total : {{  $total  }}
                    </div>
            		<div class="table table-responsive">
            			<table class="table table-striped">
            				<thead>
            					<tr>
            						<th>#</th>
            						<th>Funcionario</th>
                                    <th>Familiar</th>
                                    <th>Tipo de subsidio</th>
                                    <th>Monto</th>
            					</tr></thead>
            					<tbody>
            						@foreach ($values as $value)
            						<tr class="success">
            							<td>{{ $value->id }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">Nombre: </label>{{ $value->funcionario->nom_com }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">CI: </label>{{ $value->funcionario->ci }}
                                                </div>
                                            </div>
                                        </td>
            							<td>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">Nombre: </label>{{ $value->familiar->persona->nombre }} {{ " ".$value->familiar->persona->apellido_paterno }} {{ " ".$value->familiar->persona->apellido_materno }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">CI: </label>{{ $value->familiar->persona->ci }}
                                                </div>
                                            </div>
                                            {{ $value->familiar->persona->nombre }}

                                        </td>
                                        <td>{{ $value->tipo_subsidio }}</td>
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

