<?php $__env->startSection('content'); ?>
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

    <?php echo $__env->make('Error.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo Form::open(['route' => $ruta_controlador.'.store', 'method' => 'post', "files"=>true]); ?>


    <?php echo $__env->make($ruta_vista.'.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>