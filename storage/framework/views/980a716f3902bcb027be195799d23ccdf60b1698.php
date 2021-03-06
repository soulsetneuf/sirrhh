<?php $__env->startSection('content'); ?>
                  <?php echo $__env->make("Planilla de subsidio.menu", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Planillas de subsidios</h2>
            			<hr>
            		</div>
                    <?php echo $__env->make("Search.gestion_mes", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            		<div class="table table-responsive">
            			<table class="table table-striped">
            				<thead>
            					<tr>
            						<th>#</th>
            						<th>Gestion</th>
            						<th>Mes</th>
            						<th>Beneficiarios</th>
            						<th>Monto Total</th>
                                    <th colspan="2">Ubicacion fisica</th>
            					</tr>
            				</thead>
            					<tbody>
            						<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            						<tr class="success">
            							<td><?php echo e($value->id); ?></td>
            							<td><?php echo e($value->gestion); ?></td>
            							<td><?php echo e($value->mes); ?></td>
            							<td><?php echo e($value->beneficiarios); ?></td>
                                        <td><?php echo e($value->monto_total); ?></td>
            							<td><?php echo e($value->ubicacion_fisica); ?></td>
            							<td>
                                            <?php echo $__env->make("Boton.list", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            							</td>
            						</tr>
            						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            					</tbody>
            				</table>
            			</div>
                    <?php echo $__env->make("Boton.gestion_mes", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>