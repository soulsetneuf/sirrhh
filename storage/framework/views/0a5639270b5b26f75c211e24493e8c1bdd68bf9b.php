<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Contrato</h2>    
    <hr>
</div>
<div class="col-lg-12">
<form role="form" method="POST" action="<?php echo e(url('contratos')); ?>" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

    <div class="box">
    <div class="form-group col-lg-9">
        <label>Nonmbre completo Y CI</label>
        <select type="text" class="form-control" name="datos">
            <option value="<?php echo e($nombre); ?> <?php echo e($ci); ?>"><?php echo e($nombre); ?> <?php echo e($ci); ?></option>
        </select>
    </div>
    <div class="form-group col-lg-3">
        <label>Id de Usuario</label>
        <select type="text" class="form-control" name="id_dat">
            <option value="<?php echo e($id_dat); ?>"><?php echo e($id_dat); ?></option>
        </select> 
    </div>
     <div class="form-group col-lg-12">
        <label>Contrato</label>
        <input type="file" class="form-control filestyle" data-buttonName="btn-primary" data-input="false" name="enl_con"></input>
         <?php if($errors->has('enl_con')): ?>
            <span style="color:red;"><?php echo e($errors->first('enl_con')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-12">
        <label>ITEM</label>
        <input type="text" class="form-control" name="item">
        <?php if($errors->has('item')): ?>
            <span style="color:red;"><?php echo e($errors->first('item')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Cargo</label>
        <input type="text" class="form-control" name="cargo">
        <?php if($errors->has('cargo')): ?>
            <span style="color:red;"><?php echo e($errors->first('cargo')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Haber Basico</label>
        <input type="text" class="form-control" name="hab_bas">
        <?php if($errors->has('hab_bas')): ?>
            <span style="color:red;"><?php echo e($errors->first('hab_bas')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Inicio</label>
        <input type="date" class="form-control" name="fec_ini" value="1900-01-01">
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Conclusion</label>
        <input type="date" class="form-control" name="fec_con" value="1900-01-01">
    </div>
    <div class="form-group col-lg-6">
        <label>Destino de Ubicacion</label>
        <select type="text" class="form-control" name="des_ubi">
            <option value="Sedeca">GABETA</option>
            <option value="Maestranza">TOMO</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Sector/Trabajo</label>
        <input type="text" class="form-control" name="sec_tra">
        <?php if($errors->has('sec_tra')): ?>
            <span style="color:red;"><?php echo e($errors->first('sec_tra')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-12">
        <label>Tipo de funcionario</label>
        <input type="text" class="form-control" name="tip_fun">
        <?php if($errors->has('tip_fun')): ?>
            <span style="color:red;"><?php echo e($errors->first('tip_fun')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Encargado de Contrato</label>
        <input type="text" class="form-control" name="enc_con"></input>
        <?php if($errors->has('enc_con')): ?>
            <span style="color:red;"><?php echo e($errors->first('enc_con')); ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group col-lg-6">
        <label>Asesor Legal</label>
        <input type="text" class="form-control" name="ase_leg"></input>
        <?php if($errors->has('ase_leg')): ?>
            <span style="color:red;"><?php echo e($errors->first('ase_leg')); ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group col-lg-12">
        <label>Observaciones</label>
        <textarea type="text" class="form-control" name="obs"></textarea> 
        
    </div>
    </div>
    <center>
        <button type="bottom" class="btn btn-primary">Guardar</button>
    </center><br> 
    <center>
        <a href="/home" class="btn btn-warning">Cancelar/Sin Contrato</a>
    </center>                       
    </form>
</div>
