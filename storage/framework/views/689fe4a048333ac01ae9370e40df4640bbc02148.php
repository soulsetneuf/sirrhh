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

					<div class="panel panel-default">
						<div class="panel-body">
								
							<div class="col-lg-12">
								<hr>
								<h2 class="intro-text text-center">Planilla de asistencia</h2>
								<hr>
							</div>
							<div class="form-group">
									<center>
										<div class="col-lg-12">
											<img src='<?php echo e(asset("enl_con/".$value->path)); ?>' alt="No se encontro el archivo" style="width: 200px;height: 200px">
										</div>
									</center>

									</div>
							<div class="col-lg-12">

								<div class="box">
									<div class="form-group">
										<div class="col-lg-6">
											<?php echo Form::label('Total personas en planilla', 'Total personas en planilla'); ?>:
											<?php echo Form::label($value->total_personal); ?>

										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-6">
											<?php echo Form::label('Descripcion', 'Descripcion'); ?>:
											<?php echo Form::label($value->descripcion); ?>


										</div>
									</div>


									<div class="form-group">
										<div class="col-lg-5">
											<?php echo Form::label('Mes', 'Mes'); ?>:
											<?php echo Form::label($value->mes); ?>

										</div>
										<div class="col-lg-5">
											<?php echo Form::label('Gestion', 'Gestion'); ?>:
											<?php echo Form::label($value->gestion); ?>

										</div>
									</div>
								</div>
                                <?php echo $__env->make("Boton.show", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>