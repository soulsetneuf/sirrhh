<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Memorandum</h2>
			<hr>
		</div>
		<div class="col-lg-12">

				<div class="box">
					<div class="form-group">
						<div class="col-lg-6">
								<?php echo Form::label('Tipo de memorandum', 'Tipo de memorandum'); ?>

	                    		<?php echo Form::select('tipo_de_memorandum_id',sisRRHH\TipoDeMemorandum::pluck("tipo","id"),null,['class' => 'form-control' , 'required' => 'required']); ?>

								<?php echo link_to_route('tipos_de_memorandum.create',$title="Nuevo memorandum",$parameters="", $attributes=[""]); ?>


						</div>
						<br>
						<div class="col-lg-6">
								<?php echo Form::label('Numero de memorandum'); ?>

                     			<?php echo Form::text('numero_memorandum', null, ['class' => 'form-control' , 'required' => 'required']); ?>

                      </div>
						
					</div>
					<div class="form-group">
						<div class="col-lg-6">
							<?php echo Form::label('Fecha asignacion del memorandum'); ?>

							<?php echo Form::date('fecha_asignacion', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01","max"=>\Carbon\Carbon::now()->format('Y-m-d')]); ?>

	
						</div>
						<div class="col-lg-6">
							<?php echo Form::label('Fecha fin de designacion'); ?>

							<?php echo Form::date('fecha_designacion', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control' , 'required' => 'required',"min"=>"1980-01-01","max"=>\Carbon\Carbon::now()->format('Y-m-d')]); ?>


						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-6">
							<?php echo Form::label('Numero de tomo'); ?>

							<?php echo Form::text('numero_tomo', null, ['class' => 'form-control' , 'required' => 'required']); ?>


						</div>
						<div class="col-lg-6">
							<?php echo Form::label('Ubicacion fisica'); ?>

							<?php echo Form::text('ubicacion_fisica', null, ['class' => 'form-control' , 'required' => 'required']); ?>


						</div>
					</div>



					<div class="form-group">
						<div class="col-lg-5">
							<?php echo Form::label('Notificador/a'); ?>

							<?php echo Form::select('notificador_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
						<div class="col-lg-5">
							<?php echo Form::label('Notificado/a'); ?>

							<?php echo Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
					</div>


					<div class="form-group">
						<div class="col-lg-5">
							<?php echo Form::label('Lugar'); ?>

							<?php echo Form::text('lugar', null, ['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
						<div class="col-lg-5">
							<?php echo Form::label('Motivo'); ?>

							<?php echo Form::text('motivo', null, ['class' => 'form-control' , 'required' => 'required']); ?>

						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-5">
					   	<?php echo Form::label('Archivo', 'Archivo'); ?>

                      	<?php echo Form::file('path'); ?>

						</div>
					
					</div>

				</div>				  
		</div>

	</div>
</div>