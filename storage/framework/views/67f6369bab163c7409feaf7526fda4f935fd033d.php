<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Funcionarios</h2>
    <hr>
</div>
<div class="col-lg-12">
<form role="form" method="POST" action="<?php echo e(url('funcionarios')); ?>">
<?php echo e(csrf_field()); ?>

    <div class="box">
	<div class="form-group col-lg-6">
        <label>CI</label>
        <input type="text" class="form-control" name="ci">
        <?php if($errors->has('ci')): ?>
            <span style="color:red;"><?php echo e($errors->first('ci')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Exp</label>
        <?php echo Form::select('expedido',config("options.expedido"),null,['class' => 'form-control' , 'required' => 'required']); ?>

        <?php if($errors->has('ci')): ?>
            <span style="color:red;"><?php echo e($errors->first('ci')); ?></span>
        <?php endif; ?>
    </div>

	<div class="form-group col-lg-12">
        <label>Nombre Completo</label>
        <input type="text" class="form-control" name="nom_com">
        <?php if($errors->has('nom_com')): ?>
            <span style="color:red;"><?php echo e($errors->first('nom_com')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Sexo</label>
        <select type="text" class="form-control" name="sex">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fec_nac" value="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>" min="1900-01-01" max="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>">
        <?php if($errors->has('fec_nac')): ?>
            <span style="color:red;"><?php echo e($errors->first('fec_nac')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Estado Civil</label>
        <select type="text" class="form-control" name="est_civ">
            <option value="Casado">Casado</option>
            <option value="Soltero">Soltero</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Profesion/Ocupacion</label>
        <input type="text" class="form-control" name="pro_ocu">
        <?php if($errors->has('pro_ocu')): ?>
            <span style="color:red;"><?php echo e($errors->first('pro_ocu')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-4">
        <label>Pais de Origen</label>
        <select type="text" class="form-control" name="pais">
            <option value="Bolivia">Bolivia</option>  
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label>Departamento</label>
        <select type="text" class="form-control" name="dep">
            <option value="Potosí">Potosí</option>
            <option value="Chuquisaca">Chuquisaca</option>
            <option value="Tarija">Tarija</option>
            <option value="Oruro">Oruro</option>
            <option value="La Paz">La Paz</option>
            <option value="Cochabamba">Cochabamba</option>
            <option value="Santa Cruz">Santa Cruz</option>
            <option value="Beni">Beni</option>
            <option value="Pando">Pando</option>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label>Provincia</label>
        <input type="text" class="form-control" name="pro"></input>
        <?php if($errors->has('pro')): ?>
            <span style="color:red;"><?php echo e($errors->first('pro')); ?></span>
        <?php endif; ?>
    </div>
	<div class="form-group col-lg-6">
        <label>Ciudad/Localidad</label>
        <input type="text" class="form-control" name="ciu"></input>
        <?php if($errors->has('ciu')): ?>
            <span style="color:red;"><?php echo e($errors->first('ciu')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Direccion Actual</label>
        <input type="text" class="form-control" name="dir"></input>
        <?php if($errors->has('dir')): ?>
            <span style="color:red;"><?php echo e($errors->first('dir')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-12">
        <label>Numero Seguro Social</label>
        <input type="text" class="form-control" name="n_seg_soc"></input>
        <?php if($errors->has('n_seg_soc')): ?>
            <span style="color:red;"><?php echo e($errors->first('n_seg_soc')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Estado Laboral</label>
        <select type="text" class="form-control" name="est_lab">
            <option value="Sin Contrato">Sin Contrato</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
            <option value="De Vacacion">De Vacacion</option>
            <option value="Inactivo">Con Permiso</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Inactividad</label>
        <input type="date" class="form-control" name="fec_ina" value="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>" min="1900-01-01" max="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>"
        ></input>
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono fijo</label>
        <input type="text" class="form-control" name="tel_fij"></input>
        <?php if($errors->has('tel_fij')): ?>
            <span style="color:red;"><?php echo e($errors->first('tel_fij')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono Celular</label>
        <input type="text" class="form-control" name="tel_cel"></input>
        <?php if($errors->has('tel_cel')): ?>
            <span style="color:red;"><?php echo e($errors->first('tel_cel')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <div class="col-lg-4">
            <label>Numero de Licencia</label>
            <input type="text" class="form-control" name="num_lic"></input>
            <?php if($errors->has('num_lic')): ?>
                <span style="color:red;"><?php echo e($errors->first('num_lic')); ?></span>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <label>Categoria Licencia</label>
            <select type="text" class="form-control" name="cat_lic">
            <option value="S/L">Sin Categoria</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="T">T</option>
            </select>
        </div>
         <div class="col-lg-4">
            <label>Fecha de Fenecimiento</label>
            <input type="date" class="form-control" name="fec_fen_lic" value="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>" min="1900-01-01" max="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>">
        </div>
    </div>
     <div class="form-group col-lg-6">
        <label>Correo Personal</label>
        <input type="text" class="form-control" name="cor_per">
        <?php if($errors->has('cor_per')): ?>
            <span style="color:red;"><?php echo e($errors->first('cor_per')); ?></span>
        <?php endif; ?>
    </div>
     <div class="form-group col-lg-6">
        <label>Correo Institucional</label>
        <input type="text" class="form-control" name="cor_ins">
        <?php if($errors->has('cor_ins')): ?>
            <span style="color:red;"><?php echo e($errors->first('cor_ins')); ?></span>
        <?php endif; ?>
    </div>
     <div class="form-group col-lg-12">
        <label>Numero de Cuenta</label>
        <input type="text" class="form-control" name="num_cue">
        <?php if($errors->has('num_cue')): ?>
            <span style="color:red;"><?php echo e($errors->first('num_cue')); ?></span>
        <?php endif; ?>
    </div>
     <div class="form-group col-lg-12">
        <label>Antigüedad Extrainstitucional</label>
        <input type="text" class="form-control" name="ant_ext">
        <?php if($errors->has('cor_ins')): ?>
            <span style="color:red;"><?php echo e($errors->first('ant_ext')); ?></span>
        <?php endif; ?>
    </div>
    </div>
    <center>
        <button type="bottom" class="btn btn-primary">Guardar</button>
    </center><br>	
    <center>
        <a href="/home" class="btn btn-warning">Cancelar/Salir</a>
    </center>					  
    </form>
</div>
