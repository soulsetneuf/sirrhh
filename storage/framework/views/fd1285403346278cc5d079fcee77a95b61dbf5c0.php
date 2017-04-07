<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Funcionarios</h2>
    <hr>
 </div>
 <div class="table table-responsive">
	<table class="table table-striped">
	<?php if(isset($funcionario)): ?>
	<thead>
	<th>CI</th>
	<th>Nombre</th>
	<th>Sexo</th>
	<th>Profecion/Ocupacion</th>
	<th>Opciones</th>
	</thead>
	<tbody>
	
	<?php $__currentLoopData = $funcionario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<?php
	$rs = DB::table('contratos')->where('id_dat', $n->id)->first(); 
	?>
            <?php if(count($rs)>0): ?>
	            <?php if(date("Y-m-d")<=$rs->fec_con): ?>
				<tr class="success">
				<?php DB::table('funcionarios')
	            	->where('id', $n->id)
            		->update(['est_lab' => 'Activo','fec_ina'=>$rs->fec_con]);
	            ?>
					<td><?php echo e($n->ci); ?></td>
					<td><?php echo e($n->nom_com); ?></td>
					<td><?php echo e($n->sexo); ?></td>
					<td><?php echo e($n->pro_ocu); ?></td>
					<td>
					<form action="<?php echo e(route('funcionarios.destroy',$n->id)); ?>" method="POST" class="">
					<div class="btn-group">
						<a href="funcionarios/<?php echo e($n->id); ?>" class="btn btn-success btn-xs">Ver</a>
						<a href="funcionarios/<?php echo e($n->id); ?>/edit" class="btn btn-warning btn-xs">Modificar</a>
						<input name="_method" type="hidden" value="DELETE">
						<?php echo e(csrf_field()); ?>

						<input  type="submit" class="btn btn-danger btn-xs" value="Eliminar"/>
					</div>
					</form>
					</td>
				</tr>
	            <?php else: ?>
	            <tr class="alert-danger danger">
	            <?php DB::table('funcionarios')
	            	->where('id', $n->id)
            		->update(['est_lab' => 'Inactivo','fec_ina'=>$rs->fec_con]);

	            ?>
					<td><?php echo e($n->ci); ?></td>
					<td><?php echo e($n->nom_com); ?></td>
					<td><?php echo e($n->sexo); ?></td>
					<td><?php echo e($n->pro_ocu); ?></td>
					<td>
					<form action="<?php echo e(route('funcionarios.destroy',$n->id)); ?>" method="POST" class="">
					<div class="btn-group"> 
						<a href="funcionarios/<?php echo e($n->id); ?>" class="btn btn-success btn-xs">Ver</a>
						<a href="funcionarios/<?php echo e($n->id); ?>/edit" class="btn btn-warning btn-xs">Modificar</a>
						<input name="_method" type="hidden" value="DELETE">
						<?php echo e(csrf_field()); ?>

						<input  type="submit" class="btn btn-danger btn-xs" value="Eliminar"/>
					</div>
					</form>
					</td>
				</tr>
				<?php endif; ?>
            <?php else: ?>
         	<tr class="success">
         	<?php DB::table('funcionarios')
	            	->where('id', $n->id)
            		->update(['est_lab' => 'Sin Contrato']);
	            ?>
					<td><?php echo e($n->ci); ?></td>
					<td><?php echo e($n->nom_com); ?></td>
					<td><?php echo e($n->sexo); ?></td>
					<td><?php echo e($n->pro_ocu); ?></td>
					<td>
					<form action="<?php echo e(route('funcionarios.destroy',$n->id)); ?>" method="POST" class="">
					<div class="btn-group"> 
						<a href="funcionarios/<?php echo e($n->id); ?>" class="btn btn-success btn-xs">Ver</a>
						<a href="funcionarios/<?php echo e($n->id); ?>/edit" class="btn btn-warning btn-xs">Modificar</a>
						<input name="_method" type="hidden" value="DELETE">
						<?php echo e(csrf_field()); ?>

						<input  type="submit" class="btn btn-danger btn-xs" value="Eliminar"/>
						<a href="/contratos/<?php echo e($n->id); ?>/<?php echo e($n->nom_com); ?>/<?php echo e($n->ci); ?>" class="btn btn-primary btn-xs">Agregar Contrato</a>
					</div>
					</form>
					</td>
			</tr>
			
			<?php endif; ?>
			
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</tbody>
	<?php endif; ?>
	</table>
</div>
<center><a href="/funcionarios" class="btn btn-primary">Agregar Funcionario</a></center>
