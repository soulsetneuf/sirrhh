<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Funcionarios</h2>
    <hr>
</div>
<div class="col-lg-12">
<form role="form" method="POST" action="{{ url('funcionarios')}}">
{{csrf_field() }}
    <div class="box">
	<div class="form-group col-lg-6">
        <label>CI</label>
        <input type="text" class="form-control" name="ci">
        @if($errors->has('ci'))
            <span style="color:red;">{{$errors->first('ci')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Exp</label>
        {!! Form::select('expedido',config("options.expedido"),null,['class' => 'form-control' , 'required' => 'required']) !!}
        @if($errors->has('ci'))
            <span style="color:red;">{{$errors->first('ci')}}</span>
        @endif
    </div>

	<div class="form-group col-lg-12">
        <label>Nombre Completo</label>
        <input type="text" class="form-control" name="nom_com">
        @if($errors->has('nom_com'))
            <span style="color:red;">{{$errors->first('nom_com')}}</span>
        @endif
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
        <input type="date" class="form-control" name="fec_nac" value="{!! \Carbon\Carbon::now()->format('Y-m-d') !!}" min="1900-01-01" max="{!! \Carbon\Carbon::now()->format('Y-m-d') !!}">
        @if($errors->has('fec_nac'))
            <span style="color:red;">{{$errors->first('fec_nac')}}</span>
        @endif
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
        @if($errors->has('pro_ocu'))
            <span style="color:red;">{{$errors->first('pro_ocu')}}</span>
        @endif
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
        @if($errors->has('pro'))
            <span style="color:red;">{{$errors->first('pro')}}</span>
        @endif
    </div>
	<div class="form-group col-lg-6">
        <label>Ciudad/Localidad</label>
        <input type="text" class="form-control" name="ciu"></input>
        @if($errors->has('ciu'))
            <span style="color:red;">{{$errors->first('ciu')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Direccion Actual</label>
        <input type="text" class="form-control" name="dir"></input>
        @if($errors->has('dir'))
            <span style="color:red;">{{$errors->first('dir')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>Numero Seguro Social</label>
        <input type="text" class="form-control" name="n_seg_soc"></input>
        @if($errors->has('n_seg_soc'))
            <span style="color:red;">{{$errors->first('n_seg_soc')}}</span>
        @endif
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
        <input type="date" class="form-control" name="fec_ina" value="{!! \Carbon\Carbon::now()->format('Y-m-d') !!}" min="1900-01-01" max="{!! \Carbon\Carbon::now()->format('Y-m-d') !!}"
        ></input>
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono fijo</label>
        <input type="text" class="form-control" name="tel_fij"></input>
        @if($errors->has('tel_fij'))
            <span style="color:red;">{{$errors->first('tel_fij')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono Celular</label>
        <input type="text" class="form-control" name="tel_cel"></input>
        @if($errors->has('tel_cel'))
            <span style="color:red;">{{$errors->first('tel_cel')}}</span>
        @endif
    </div>
    <div class="form-group">
        <div class="col-lg-4">
            <label>Numero de Licencia</label>
            <input type="text" class="form-control" name="num_lic"></input>
            @if($errors->has('num_lic'))
                <span style="color:red;">{{$errors->first('num_lic')}}</span>
            @endif
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
            <input type="date" class="form-control" name="fec_fen_lic" value="{!! \Carbon\Carbon::now()->format('Y-m-d') !!}" min="1900-01-01" max="{!! \Carbon\Carbon::now()->format('Y-m-d') !!}">
        </div>
    </div>
     <div class="form-group col-lg-6">
        <label>Correo Personal</label>
        <input type="text" class="form-control" name="cor_per">
        @if($errors->has('cor_per'))
            <span style="color:red;">{{$errors->first('cor_per')}}</span>
        @endif
    </div>
     <div class="form-group col-lg-6">
        <label>Correo Institucional</label>
        <input type="text" class="form-control" name="cor_ins">
        @if($errors->has('cor_ins'))
            <span style="color:red;">{{$errors->first('cor_ins')}}</span>
        @endif
    </div>
     <div class="form-group col-lg-12">
        <label>Numero de Cuenta</label>
        <input type="text" class="form-control" name="num_cue">
        @if($errors->has('num_cue'))
            <span style="color:red;">{{$errors->first('num_cue')}}</span>
        @endif
    </div>
     <div class="form-group col-lg-12">
        <label>Antigüedad Extrainstitucional</label>
        <input type="text" class="form-control" name="ant_ext">
        @if($errors->has('cor_ins'))
            <span style="color:red;">{{$errors->first('ant_ext')}}</span>
        @endif
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
