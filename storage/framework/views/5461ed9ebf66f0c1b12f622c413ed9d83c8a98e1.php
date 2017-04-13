<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Familiares</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group">
						<div class="col-lg-6">
							<?php echo Form::label('Funcionario'); ?>

							<?php echo Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required',"id"=>"funcionario_id"]); ?>

						</div>
						<br>
						<div class="col-lg-6">
							<?php echo Form::label('Familiar'); ?>

							<?php echo Form::select('familiar_id',sisRRHH\Persona::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required',"id"=>"familiar_id"]); ?>

                      </div>
					</div>

					<div class="form-group">
						<div class="col-lg-6">
							<?php echo Form::label('Tipo de parentesco'); ?>

							<?php echo Form::select('tipo_parentesco',config('options.tipo_parentesco'),null,['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
					</div>
				</div>
                <?php echo $__env->make("Boton.boton", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

	</div>
</div>