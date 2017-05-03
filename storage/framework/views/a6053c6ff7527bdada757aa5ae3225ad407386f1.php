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
				 <?php echo Form::open(['route' => $ruta_controlador.'.store', 'method' => 'post', 'novalidate']); ?>

                  <?php echo $__env->make($ruta_vista.'.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo Form::close(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#funcionario_id').change(function(){
			$.get("<?php echo e(url('parentesco')); ?>",
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>