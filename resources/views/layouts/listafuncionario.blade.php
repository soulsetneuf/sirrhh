<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Funcionarios</h2>
    <hr>
 </div>
 <div class="table table-responsive">
	<table class="table table-striped">
	@if(isset($funcionario))
	<thead>
	<th>CI</th>
	<th>Nombre</th>
	<th>Sexo</th>
	<th>Profecion/Ocupacion</th>
	<th>Opciones</th>
	</thead>
	<tbody>
	
	@foreach($funcionario as $n)
	<?php
	$rs = DB::table('contratos')->where('id_dat', $n->id)->first(); 
	?>
            @if(count($rs)>0)
	            @if(date("Y-m-d")<=$rs->fec_con)
				<tr class="success">
				<?php DB::table('funcionarios')
	            	->where('id', $n->id)
            		->update(['est_lab' => 'Activo','fec_ina'=>$rs->fec_con]);
	            ?>
					<td>{{$n->ci}}</td>
					<td>{{$n->nom_com}}</td>
					<td>{{$n->sexo}}</td>
					<td>{{$n->pro_ocu}}</td>
					<td>
					<form action="{{route('funcionarios.destroy',$n->id)}}" method="POST" class="">
					<div class="btn-group">
						<a href="funcionarios/{{ $n->id }}" class="btn btn-success btn-xs">Ver</a>
						<a href="funcionarios/{{ $n->id }}/edit" class="btn btn-warning btn-xs">Modificar</a>
						<input name="_method" type="hidden" value="DELETE">
						{{csrf_field()}}
						<input  type="submit" class="btn btn-danger btn-xs" value="Eliminar"/>
					</div>
					</form>
					</td>
				</tr>
	            @else
	            <tr class="alert-danger danger">
	            <?php DB::table('funcionarios')
	            	->where('id', $n->id)
            		->update(['est_lab' => 'Inactivo','fec_ina'=>$rs->fec_con]);

	            ?>
					<td>{{$n->ci}}</td>
					<td>{{$n->nom_com}}</td>
					<td>{{$n->sexo}}</td>
					<td>{{$n->pro_ocu}}</td>
					<td>
					<form action="{{route('funcionarios.destroy',$n->id)}}" method="POST" class="">
					<div class="btn-group"> 
						<a href="funcionarios/{{ $n->id }}" class="btn btn-success btn-xs">Ver</a>
						<a href="funcionarios/{{ $n->id }}/edit" class="btn btn-warning btn-xs">Modificar</a>
						<input name="_method" type="hidden" value="DELETE">
						{{csrf_field()}}
						<input  type="submit" class="btn btn-danger btn-xs" value="Eliminar"/>
					</div>
					</form>
					</td>
				</tr>
				@endif
            @else
         	<tr class="success">
         	<?php DB::table('funcionarios')
	            	->where('id', $n->id)
            		->update(['est_lab' => 'Sin Contrato']);
	            ?>
					<td>{{$n->ci}}</td>
					<td>{{$n->nom_com}}</td>
					<td>{{$n->sexo}}</td>
					<td>{{$n->pro_ocu}}</td>
					<td>
					<form action="{{route('funcionarios.destroy',$n->id)}}" method="POST" class="">
					<div class="btn-group"> 
						<a href="funcionarios/{{ $n->id }}" class="btn btn-success btn-xs">Ver</a>
						<a href="funcionarios/{{ $n->id }}/edit" class="btn btn-warning btn-xs">Modificar</a>
						<input name="_method" type="hidden" value="DELETE">
						{{csrf_field()}}
						<input  type="submit" class="btn btn-danger btn-xs" value="Eliminar"/>
						<a href="/contratos/{{$n->id}}/{{$n->nom_com}}/{{$n->ci}}" class="btn btn-primary btn-xs">Agregar Contrato</a>
					</div>
					</form>
					</td>
			</tr>
			
			@endif
			
	@endforeach
	</tbody>
	@endif
	</table>
</div>
<center><a href="/funcionarios" class="btn btn-primary">Agregar Funcionario</a></center>
