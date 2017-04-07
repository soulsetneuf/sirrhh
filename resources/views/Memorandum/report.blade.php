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
							<td>Tipo de memorandum </td>
							<td>
                                {!! Form::select('tipo_de_memorandum_id',sisRRHH\TipoDeMemorandum::pluck("tipo","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
							</td>
							<td>
								<button type="submit" class="btn btn-primary">Buscar</button>
							</td>
						</tr>
					</table>
					{!! Form::close() !!}

            		</div>



            </div>
        </div>
    </div>
</div>
@endsection