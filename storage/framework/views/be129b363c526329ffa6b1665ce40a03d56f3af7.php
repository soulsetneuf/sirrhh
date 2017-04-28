<div class="col-lg-12">
    <hr>
    <h2 class="intro-text text-center">Planilla de sueldo</h2>
    <hr>
</div>
<div class="form-group">
    <div class="col-lg-6">
        <?php echo Form::label('Total personas en planilla', 'Total personas en planilla'); ?>

        <?php echo Form::text('total_personal', null, ['class' => 'form-control' , 'required' => 'required']); ?>

    </div>
    <div class="col-lg-6">
        <?php echo Form::label('Monto total en planilla', 'Monto total en planilla'); ?>

        <?php echo Form::text('monto_total', null, ['class' => 'form-control' , 'required' => 'required']); ?>

    </div>
</div>
<div class="form-group">
    <div class="col-lg-6">
        <?php echo Form::label('Ubicacion fisica'); ?>

        <?php echo Form::text('ubicacion_fisica', null, ['class' => 'form-control' , 'required' => 'required']); ?>

    </div>
    <div class="col-lg-6">
        <?php echo Form::label('Descripcion', 'Descripcion'); ?>

        <?php echo Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'required']); ?>

    </div>
</div>
<div class="form-group">
    <div class="col-lg-6">
        <?php echo Form::label('Mes', 'Mes'); ?>

        <?php echo Form::select('mes',config("options.meses"),null,['class' => 'form-control' , 'required' => 'required']); ?>

    </div>
    <div class="col-lg-6">
        <?php echo Form::label('Gestion', 'Gestion'); ?>

        <?php echo Form::select('gestion',config("options.gestiones"),null,['class' => 'form-control' , 'required' => 'required']); ?>

    </div>
</div>
<div class="form-group">
    <div class="col-lg-12">
        <?php echo Form::label('Archivo', 'Archivo'); ?>

        <?php echo Form::file('path'); ?>

    </div>
</div>
<br/>
<div class="row">
    <?php echo e(Form::label(" ")); ?>

    <div class="col-md-12">
        <?php echo $__env->make("Boton.boton", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>