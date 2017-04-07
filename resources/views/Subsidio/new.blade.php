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



				 {!! Form::open(['route' => $ruta_controlador.'.store', 'method' => 'post', 'novalidate']) !!}

                  @include($ruta_vista.'.form') 

					<center>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</center><br>		

				{!! Form::close() !!}




                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		$('#funcionario_id').change(function(){
			$.get("{{ url('dropdown')}}",
			{ option: $(this).val() },
			function(data) {
				$('#familiar_id').empty();
				$.each(data, function(key, element) {
					$('#familiar_id').append("<option value='" + key + "'>" + element + "</option>");
				});
			});
		});
	});		
</script>

@endsection


