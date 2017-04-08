<?php $__env->startSection('content'); ?>
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
                    <?php echo Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']); ?>

                    <table class="table">
                        <tr>
                            <td>Tipo de subsidio </td>
                            <td>
                                <?php echo Form::select('tipo_subsidio',array_add(config("options.tipo_subsidio"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']); ?>

                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </td>
                        </tr>
                    </table>
                    <?php echo Form::close(); ?>

                    <div class="col-lg-3">
                        Numero de funcionarios : <?php echo e($numero_funcionarios); ?>

                    </div>
                    <div class="col-lg-3">
                        Total Prenatal : <?php echo e($total_prenatal); ?>

                    </div>
                    <div class="col-lg-3">
                        Total Lactancia : <?php echo e($total_lactancia); ?>

                    </div>
                    <div class="col-lg-3">
                        Total : <?php echo e($total); ?>

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
            						<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            						<tr class="success">
            							<td><?php echo e($value->id); ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">Nombre: </label><?php echo e($value->funcionario->nom_com); ?>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">CI: </label><?php echo e($value->funcionario->ci); ?>

                                                </div>
                                            </div>
                                        </td>
            							<td>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">Nombre: </label><?php echo e($value->familiar->persona->nombre); ?> <?php echo e(" ".$value->familiar->persona->apellido_paterno); ?> <?php echo e(" ".$value->familiar->persona->apellido_materno); ?>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="">CI: </label><?php echo e($value->familiar->persona->ci); ?>

                                                </div>
                                            </div>
                                            <?php echo e($value->familiar->persona->nombre); ?>


                                        </td>
                                        <td><?php echo e($value->tipo_subsidio); ?></td>
                                        <td><?php echo e($value->monto); ?></td>
            							<td>

            							<div class="btn-group">
            								 <?php echo link_to_route($ruta_controlador.'.edit',$title="Editar",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"]); ?>


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