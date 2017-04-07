<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <?php if(session()->has('msj')): ?>
				<div class="alert alert-success" role="alert">
				<?php echo e(session('msj')); ?>

				</div>
				<?php endif; ?>
				<?php if(session()->has('errormsj')): ?>
				<div class="alert alert-danger" role="alert">
				Error al guardar los Datos.
				</div>
				<?php endif; ?>
                    <?php echo $__env->make('layouts.funcionario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>