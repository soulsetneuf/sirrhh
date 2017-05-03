<?php $__env->startSection('content'); ?>
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Subsidios</h2>
            			<hr>
            		</div>
                    <?php echo Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']); ?>

                    <table class="table">
                        <tr>
                            <td>Tipo de subsidio </td>
                            <td>
                                <?php if(is_null($tipo_subsidio)): ?>
                                    <?php echo Form::select('tipo_subsidio',array_add(config("options.tipo_subsidio"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']); ?>

                                <?php else: ?>
                                    <?php echo Form::select('tipo_subsidio',array_add(config("options.tipo_subsidio"),"Todos","Todos"),$tipo_subsidio,['class' => 'form-control' , 'required' => 'required']); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </td>
                        </tr>
                    </table>
                    <?php echo Form::close(); ?>


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
            						<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            						<tr class="success">
            							<td><?php echo e($value->id); ?></td>
                                        <td>
                                            <?php echo e($value->funcionario->ci); ?>

                                        </td>
            							<td>
                                            <?php echo e($value->funcionario->nombre_completo); ?>

                                        </td>
                                        <td><?php echo e($value->familiar->persona->ci); ?></td>
                                        <td><?php echo e($value->familiar->persona->nombre_completo); ?></td>
                                        <td>
                                            <?php if($value->tipo_subsidio=="Prenatal"): ?>
                                                <?php echo e($value->total); ?> bs
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($value->tipo_subsidio=="Lactancia"): ?>
                                                <?php echo e($value->total); ?> bs
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($value->total); ?> bs
                                        </td>
                                        <td>
                                            <?php echo e($value->created_at); ?>

                                        </td>
            							<td>
                                            <?php echo $__env->make("Boton.list", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            							</td>
            						</tr>
            						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                        <th colspan="5"></th>
                                        <th>Total Prenatal : <br/><?php echo e($total_prenatal); ?> bs</th>
                                        <th>Total Lactancia : <br/><?php echo e($total_lactancia); ?> bs</th>
                                        <th colspan="3">Total : <br/><?php echo e($total); ?> bs</th>
                                    </tr>
            					</tbody>
            				</table>
            			</div>
                    <center>
                        <?php if(is_null($tipo_subsidio)): ?>
                            <?php echo link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
                            $parameters=["tipo_subsidio"=>"Todos"],
                            $attributes=["class"=>"btn btn-default"]); ?>

                        <?php else: ?>
                            <?php echo link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
                            $parameters=["tipo_subsidio"=>$tipo_subsidio],
                            $attributes=["class"=>"btn btn-default"]); ?>

                        <?php endif; ?>
            				 <?php echo link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"]); ?>

            			</center>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>