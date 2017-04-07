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
							<td>Tipo de memorandum </td>
							<td>
                                <?php echo Form::select('tipo_de_memorandum_id',sisRRHH\TipoDeMemorandum::pluck("tipo","id"),null,['class' => 'form-control' , 'required' => 'required']); ?>

							</td>
							<td>
								<button type="submit" class="btn btn-primary">Buscar</button>
							</td>
						</tr>
					</table>
					<?php echo Form::close(); ?>


            		</div>



            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>