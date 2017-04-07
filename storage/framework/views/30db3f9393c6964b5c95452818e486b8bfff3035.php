<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  	<div class="col-lg-12">
				    <hr>
				        <h2 class="intro-text text-center"><?php echo e($funcionario->nom_com); ?></h2>
				    <hr>
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
					</div>
					<div class="col-lg-12">
						    <div class="box">
							<table class="table table-hover">
							<tr>
								<td colspan="2"><center><h4>Datos Generales</h4></center></td>
							</tr>
							<tr>
						        <td><label>CI:</label></td>
						        <td><label><?php echo e($funcionario->ci); ?></label></td>
						    </tr>
							<tr>
						        <td><label>Nombre:</label></td>
						        <td><label><?php echo e($funcionario->nom_com); ?></label></td>
						    </tr>
						    
						    <tr>
						        <td><label>Sexo:</label></td>
						        <td><label><?php echo e($funcionario->sexo); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Fecha de Nacimiento:</label></td>
						        <td><label><?php echo e($funcionario->fec_nac); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Estado Civil:</label></td>
						        <td><label><?php echo e($funcionario->est_civ); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Profecion/Ocupacion:</label></td>
						        <td><label><?php echo e($funcionario->pro_ocu); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Nacionalidad:</label></td>
						        <td><label><?php echo e($funcionario->pais); ?>-<?php echo e($funcionario->dep); ?>-<?php echo e($funcionario->pro); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Direccion:</label></td>
						        <td><label><?php echo e($funcionario->ciu); ?>-<?php echo e($funcionario->dir); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Numero Seguro Social:</label></td>
						        <td><label><?php echo e($funcionario->n_seg_soc); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Estado Laboral:</label></td>
						        <td><label><?php echo e($funcionario->est_lab); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Fecha de Inactividad:</label></td>
						        <td><label><?php echo e($funcionario->fec_ina); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Telefono Fijo:</label></td>
						        <td><label><?php echo e($funcionario->tel_fij); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Telefono Celular:</label></td>
						        <td><label><?php echo e($funcionario->tel_cel); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Telefono de Emergencia:</label></td>
						        <td><label><?php echo e($funcionario->tel_eme); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Telefono Coorporativo:</label></td>
						        <td><label><?php echo e($funcionario->tel_cor); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Numero de Licencia:</label></td>
						        <td><label><?php echo e($funcionario->num_lic); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Categoria Licencia:</label></td>
						        <td><label>"<?php echo e($funcionario->cat_lic); ?>"</label></td>
						    </tr>
						    <tr>
						        <td><label>Fecha de fenecimiento:</label></td>
						        <td><label><?php echo e($funcionario->fec_fen_lic); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Correo Personal:</label></td>
						        <td><label><?php echo e($funcionario->cor_per); ?></label></td>
						    </tr>	
						    <tr>
						        <td><label>Correo Institucional:</label></td>
						        <td><label><?php echo e($funcionario->cor_ins); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Numero de Ceunta:</label></td>
						        <td><label><?php echo e($funcionario->num_cue); ?></label></td>
						    </tr>	
						    <tr>
						        <td><label>Antigüedad Extrainstitucional:</label></td>
						        <td><label><?php echo e($funcionario->ant_ext); ?></label></td>
						    </tr>
						    <tr>
							    <td colspan="2"><center>
							        <a href="/funcionarios/<?php echo e($funcionario->id); ?>/edit" type="bottom" class="btn btn-primary">Modificar Datos Generales</a>
							    </center>
							    </td>
						    </tr>				    
						    </table>
						    <!-- Datos Contrato -->
						    <?php if(isset($contrato)): ?>
						   	<table class="table table-hover">
						    <tr>
								<td colspan="2"><center><h4>Datos Contrato</h4></center></td>
							</tr>
						    <tr>
						        <td><label>Item:</label></td>
						        <td><label><?php echo e($contrato->item); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Cargo:</label></td>
						        <td><label><?php echo e($contrato->cargo); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Haber Basico:</label></td>
						        <td><label><?php echo e($contrato->hab_bas); ?></label></td>
						    </tr>
						     <tr>
						        <td><label>Fecha Inicio:</label></td>
						        <td><label><?php echo e($contrato->fec_ini); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Fecha Conclusion:</label></td>
						        <td><label><?php echo e($contrato->fec_con); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Destino Ubicacion:</label></td>
						        <td><label><?php echo e($contrato->des_ubi); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Sector Trabajo:</label></td>
						        <td><label><?php echo e($contrato->sec_tra); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Tipo Funcionario:</label></td>
						        <td><label><?php echo e($contrato->tip_fun); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Encargado de Contrato:</label></td>
						        <td><label><?php echo e($contrato->enc_con); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Asesor Legal:</label></td>
						        <td><label><?php echo e($contrato->ase_leg); ?></label></td>
						    </tr>
						    <tr>
						        <td><label>Observaciones:</label></td>
						        <td><textarea class="form-control"><?php echo e($contrato->obs); ?></textarea></td>
						    </tr>
						    <tr>
						        <td><label>Descragar Contrato:</label></td>
						        <td><a class="btn btn-success btn-sm" href="/enl_con/<?php echo e($contrato->enl_con); ?>" download="<?php echo e($contrato->enl_con); ?>">Guardar Contrato</a></td>
						    </tr>
						    <tr>
							    <td colspan="2"><center>
							        <a href="/contratos/<?php echo e($contrato->id); ?>/edit" type="bottom" class="btn btn-primary">Modificar Contrato</a>
							    </center>
							    </td>
						    </tr>	
						    </table>
						    <?php endif; ?>
						    <center>
							        <a href="/home" class="btn btn-warning">Cancelar/Salir</a>
							</center>
						    </div>	 		    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>