<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Subsidio</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group">
						<div class="col-lg-6">
							<?php echo Form::label('Funcionario'); ?>

							<?php echo Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'true',"id"=>"funcionario_id"]); ?>

						</div>
						<br>
						<div class="col-lg-6">
							<?php echo Form::label('Familiar'); ?>

							<?php echo Form::select('familiar_id',sisRRHH\Familiar::pluck("tipo_parentesco","id"),null,['class' => 'form-control' , 'required' => 'true',"id"=>"familiar_id"]); ?>

                      </div>
					</div>

					<div class="form-group">
						<div class="col-lg-6">
							<?php echo Form::label('Tipo de subsidio'); ?>

							<?php echo Form::select('tipo_subsidio',config('options.tipo_subsidio'),null,['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
						<div class="form-group col-lg-6">
						  <?php echo Form::label("Monto"); ?>

	                      <?php echo Form::text("monto", null, ['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
					</div>
					<div class="form-group">
						<div class="form-group col-lg-6">
						  <?php echo Form::label("Total"); ?>

	                      <?php echo Form::text("total", null, ['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
						<div class="form-group col-lg-6">
						  <?php echo Form::label("Numero de asignacion"); ?>

	                      <?php echo Form::text("numero_asignacion", null, ['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
					</div>
					<div class="form-group">
						<div class="form-group col-lg-6">
						  <?php echo Form::label("Observaciones"); ?>

	                      <?php echo Form::text("observaciones", null, ['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
						<div class="form-group col-lg-6">
						</div>
					</div>
				</div>				  
		</div>

	</div>
</div>