<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Modificar Funcionarios</h2>
    <hr>
</div>
@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
{{ session('msj') }}
</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert">
Error al guardar los Datos.
</div>
@endif
@if(isset($funcionario))
<div class="col-lg-12">
<form role="form" method="POST" action="{{ route('funcionarios.update',$funcionario->id)}}">
<input type="hidden" name="_method" value="PUT">
{{csrf_field() }}
    <div class="box">
	<div class="form-group col-lg-12">
        <label>CI</label>
        <input type="text" class="form-control" name="ci" value="{{$funcionario->ci}}">
        @if($errors->has('ci'))
            <span style="color:red;">{{$errors->first('ci')}}</span>
        @endif
    </div>
	<div class="form-group col-lg-12">
        <label>Nombre Completo</label>
        <input type="text" class="form-control" name="nom_com" value="{{$funcionario->nom_com}}">
        @if($errors->has('nom_com'))
            <span style="color:red;">{{$errors->first('nom_com')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Sexo</label>
        <select type="text" class="form-control" name="sex">
        @if($funcionario->sexo=="Femenino")
            <option value="Femenino" selected="selected">Femenino</option>
            <option value="Masculino">Masculino</option>
        @endif
        @if($funcionario->sexo=="Masculino")
            <option value="Femenino">Femenino</option>
            <option value="Masculino" selected="selected">Masculino</option>
        @endif
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fec_nac" value="{{$funcionario->fec_nac}}">
        @if($errors->has('fec_nac'))
            <span style="color:red;">{{$errors->first('fec_nac')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Estado Civil</label>
        <select type="text" class="form-control" name="est_civ">
            @if($funcionario->est_civ=="Casado")
            <option value="Casado" selected="selected">Casado</option>
            <option value="Soltero">Soltero</option>
            @endif
             @if($funcionario->est_civ=="Soltero")
            <option value="Casado">Casado</option>
            <option value="Soltero" selected="selected">Soltero</option>
            @endif
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Profecion/Ocupacion</label> 
        <input type="text" class="form-control" name="pro_ocu" value="{{$funcionario->pro_ocu}}">
        @if($errors->has('pro_ocu'))
            <span style="color:red;">{{$errors->first('pro_ocu')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-4">
        <label>Pais de Origen</label>
        <select type="text" class="form-control" name="pais" value="{{$funcionario->pais}}">
            <option value="Bolivia">Bolivia</option>  
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label>Departamento</label>
        <select type="text" class="form-control" name="dep">
            <option value="{{$funcionario->dep}}">{{$funcionario->dep}}</option>
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
        <input type="text" class="form-control" name="pro" value="{{$funcionario->pro}}"></input>
        @if($errors->has('pro'))
            <span style="color:red;">{{$errors->first('pro')}}</span>
        @endif
    </div>
	<div class="form-group col-lg-6">
        <label>Ciudad/Lugar</label>
        <input type="text" class="form-control" name="ciu" value="{{$funcionario->ciu}}"></input>
        @if($errors->has('ciu'))
            <span style="color:red;">{{$errors->first('ciu')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Direccion</label>
        <input type="text" class="form-control" name="dir" value="{{$funcionario->dir}}"></input>
        @if($errors->has('dir'))
            <span style="color:red;">{{$errors->first('dir')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>Numero Seguro Social</label>
        <input type="text" class="form-control" name="n_seg_soc" value="{{$funcionario->n_seg_soc}}"></input>
        @if($errors->has('n_seg_soc'))
            <span style="color:red;">{{$errors->first('n_seg_soc')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Estado Laboral</label>
        <input type="text" class="form-control" name="est_lab" value="{{$funcionario->est_lab}}"></input>
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Inactividad</label>
        <input type="date" class="form-control" name="fec_ina" value="{{$funcionario->fec_ina}}"></input>
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono fijo</label>
        <input type="text" class="form-control" name="tel_fij" value="{{$funcionario->tel_fij}}"></input>
        @if($errors->has('tel_fij'))
            <span style="color:red;">{{$errors->first('tel_fij')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono Celular</label>
        <input type="text" class="form-control" name="tel_cel" value="{{$funcionario->tel_cel}}"></input>
        @if($errors->has('tel_cel'))
            <span style="color:red;">{{$errors->first('tel_cel')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono Emergencia</label>
        <input type="text" class="form-control" name="tel_eme" value="{{$funcionario->tel_eme}}"></input>
        @if($errors->has('tel_eme'))
            <span style="color:red;">{{$errors->first('tel_eme')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Telefono Coorporativo</label>
        <input type="text" class="form-control" name="tel_cor" value="{{$funcionario->tel_cor}}"></input>
        @if($errors->has('tel_cor'))
            <span style="color:red;">{{$errors->first('tel_cor')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>Numero de Licencia</label>
        <input type="text" class="form-control" name="num_lic" value="{{$funcionario->num_lic}}"></input>
        @if($errors->has('num_lic'))
            <span style="color:red;">{{$errors->first('num_lic')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Categoria Licencia</label>
        <select type="text" class="form-control" name="cat_lic">
        <option value="{{$funcionario->cat_lic}}">{{$funcionario->cat_lic}}</option>
        <option value="S/L">Sin Categoria</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="T">T</option>
        </select>
    </div>
     <div class="form-group col-lg-6">
        <label>Fecha de Fenecimiento</label>
        <input type="date" class="form-control" name="fec_fen_lic" value="1900-01-01" value="{{$funcionario->fec_fen_lic}}">
    </div>
     <div class="form-group col-lg-6">
        <label>Correo Personal</label>
        <input type="text" class="form-control" name="cor_per" value="{{$funcionario->cor_per}}">
        @if($errors->has('cor_per'))
            <span style="color:red;">{{$errors->first('cor_per')}}</span>
        @endif
    </div>
     <div class="form-group col-lg-6">
        <label>Correo Institucional</label>
        <input type="text" class="form-control" name="cor_ins" value="{{$funcionario->cor_ins}}">
        @if($errors->has('cor_ins'))
            <span style="color:red;">{{$errors->first('cor_ins')}}</span>
        @endif
    </div>
     <div class="form-group col-lg-12">
        <label>Numero de Cuenta</label>
        <input type="text" class="form-control" name="num_cue" value="{{$funcionario->num_cue}}">
        @if($errors->has('num_cue'))
            <span style="color:red;">{{$errors->first('num_cue')}}</span>
        @endif
    </div>
     <div class="form-group col-lg-12">
        <label>Antigüedad Extrainstitucional</label>
        <input type="text" class="form-control" name="ant_ext" value="{{$funcionario->ant_ext}}">
        @if($errors->has('cor_ins'))
            <span style="color:red;">{{$errors->first('ant_ext')}}</span>
        @endif
    </div>
    </div>
    <center>
        <button type="bottom" class="btn btn-primary">Modificar</button>
    </center><br>	
    <center>
        <a href="/home" class="btn btn-warning">Cancelar/Salir</a>
    </center>					  
    </form>
</div>
@endif