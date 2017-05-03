@extends('layouts.app')

@section('content')
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
                                @if(is_null($tipo_subsidio))
                                    {!! Form::select('tipo_subsidio',array_add(config("options.tipo_subsidio"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']) !!}
                                @else
                                    {!! Form::select('tipo_subsidio',array_add(config("options.tipo_subsidio"),"Todos","Todos"),$tipo_subsidio,['class' => 'form-control' , 'required' => 'required']) !!}
                                @endif
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </td>
                        </tr>
                    </table>
                    {!! Form::close() !!}

            		<div class="table table-responsive">
            			<table class="table table-bordered">
            				<thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;text-align: center">Nro</th>
                                    <th colspan="2" style="text-align: center">Funcionario</th>
                                    <th colspan="2" style="text-align: center">Beneficiario/a</th>
                                    <th colspan="2" style="text-align: center">Tipo de subsidio</th>
                                    <th rowspan="2" style="vertical-align: middle;text-align: center">Total</th>
                                    <th rowspan="2" style="vertical-align: middle;text-align: center">Fecha</th>
                                    <th rowspan="2" style="vertical-align: middle;text-align: center">Acciones</th>
                                </tr>
            					<tr>
            						<th>CI</th>
                                    <th>Nombre completo</th>
                                    <th>CI</th>
                                    <th>Nombre completo</th>
                                    <th>Prenatal</th>
                                    <th>Lactancia</th>
            					</tr></thead>
            					<tbody>
            						@foreach ($values as $value)
            						<tr class="success">
            							<td>{{ $value->id }}</td>
                                        <td>
                                            {{ $value->funcionario->ci }}
                                        </td>
            							<td>
                                            {{ $value->funcionario->nombre_completo }}
                                        </td>
                                        <td>{{ $value->familiar->persona->ci}}</td>
                                        <td>{{ $value->familiar->persona->nombre_completo}}</td>
                                        <td>
                                            @if($value->tipo_subsidio=="Prenatal")
                                                {{$value->total}} bs
                                            @endif
                                        </td>
                                        <td>
                                            @if($value->tipo_subsidio=="Lactancia")
                                                {{$value->total}} bs
                                            @endif
                                        </td>
                                        <td>
                                            {{ $value->total }} bs
                                        </td>
                                        <td>
                                            {{ $value->created_at }}
                                        </td>
            							<td>
                                            @include("Boton.list")
            							</td>
            						</tr>
            						@endforeach
                                    <tr>
                                        <th colspan="5"></th>
                                        <th>Total Prenatal : <br/>{{  $total_prenatal  }} bs</th>
                                        <th>Total Lactancia : <br/>{{  $total_lactancia  }} bs</th>
                                        <th colspan="3">Total : <br/>{{  $total  }} bs</th>
                                    </tr>
            					</tbody>
            				</table>
            			</div>
                    <center>
                        @if(is_null($tipo_subsidio))
                            {!! link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
                            $parameters=["tipo_subsidio"=>"Todos"],
                            $attributes=["class"=>"btn btn-default"])  !!}
                        @else
                            {!! link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
                            $parameters=["tipo_subsidio"=>$tipo_subsidio],
                            $attributes=["class"=>"btn btn-default"])  !!}
                        @endif
            				 {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
            			</center>
@endsection

