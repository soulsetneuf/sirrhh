<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              


            	<div class="panel-body">
                <?php echo $__env->make("Memorandum.menu", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Memorandum</h2>
            			<hr>
            		</div>


					<?php echo Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']); ?>

					<table class="table">
						<tr>
							<td>CI Notificado </td>
							<td>
								<?php echo Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']); ?>

							</td>
                            <td>Tipo de memorandum </td>
                            <td>
                                <?php echo Form::select('tipo_de_memorandum_id',array_add(sisRRHH\TipoDeMemorandum::pluck("tipo","id"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']); ?>

                            </td>
							<td>
								<button type="submit" class="btn btn-primary">Buscar</button>
							</td>
						</tr>
					</table>
					<?php echo Form::close(); ?>


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
            						<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            						<tr class="success">
            							<td><?php echo e($value->id); ?></td>
            							<td><?php echo e($value->numero_memorandum); ?></td>
            							<td><?php echo e($value->fecha_asignacion); ?></td>
            							<td><?php echo e($value->notificador->ci); ?></td>
										<td><?php echo e($value->notificado->ci); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <?php echo link_to_route($ruta_controlador.'.show',$title="Ver",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"]); ?>


                                                <?php echo link_to_route($ruta_controlador.'.edit',$title="Editar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning btn-xs"]); ?>


                                                 <?php echo Form::open(['route' =>[ $ruta_controlador.'.destroy',$value->id], 'method' => 'DELETE']); ?>


                                                  <input type="submit" value="Eliminar" name="eliminar" class="btn btn-danger btn-xs">
                                                 <?php echo Form::close(); ?>


                                            </div>
            							</td>
            						</tr>
            						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            					</tbody>
            				</table>
            			</div>
            			<center>
            				 <?php echo link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"]); ?>

            			</center>

            		</div>



            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>