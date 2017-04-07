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
                                    <h2 class="intro-text text-center">Memorandum</h2>
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
                                                <?php echo Form::label('Tipo de memorandum', 'Tipo de memorandum'); ?>:
                                                <?php echo Form::label($value->memorandum->tipo); ?>

                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo Form::label('Numero de memorandum'); ?>

                                                <?php echo Form::label($value->numero_memorandum); ?>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <?php echo Form::label('Fecha asignacion del memorandum'); ?>:
                                                <?php echo Form::label($value->fecha_asignacion); ?>


                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo Form::label('Fecha fin de designacion'); ?>:
                                                <?php echo Form::label($value->fecha_designacion); ?>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <?php echo Form::label('Numero de tomo'); ?>:
                                                <?php echo Form::label($value->numero_tomo); ?>

                                            </div>
                                            <div class="col-lg-6">
                                                <?php echo Form::label('Ubicacion fisica'); ?>

                                                <?php echo Form::label($value->ubicacion_fisica); ?>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-5">
                                                <?php echo Form::label('Notificador/a'); ?>

                                                <?php echo Form::label($value->notificador->ci); ?>

                                            </div>
                                            <div class="col-lg-5">
                                                <?php echo Form::label('Notificado/a'); ?>

                                                <?php echo Form::label($value->notificado->ci); ?>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-lg-5">
                                                <?php echo Form::label('Lugar'); ?>

                                                <?php echo Form::label($value->lugar); ?>

                                              </div>
                                            <div class="col-lg-5">
                                                <?php echo Form::label('Motivo'); ?>

                                                <?php echo Form::label($value->motivo); ?>

                                            </div>
                                        </div>
                                    </div>
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