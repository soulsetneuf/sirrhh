<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Contrato</h2>    
    <hr>
</div>
<div class="col-lg-12">
<form role="form" method="POST" action="{{ url('contratos') }}" enctype="multipart/form-data">
{{csrf_field() }}
    <div class="box">
    <div class="form-group col-lg-9">
        <label>Nonmbre completo Y CI</label>
        <select type="text" class="form-control" name="datos">
            <option value="{{ $nombre }} {{ $ci }}">{{ $nombre }} {{ $ci }}</option>
        </select>
    </div>
    <div class="form-group col-lg-3">
        <label>Id de Usuario</label>
        <select type="text" class="form-control" name="id_dat">
            <option value="{{ $id_dat }}">{{ $id_dat }}</option>
        </select> 
    </div>
     <div class="form-group col-lg-12">
        <label>Contrato</label>
        <input type="file" class="form-control filestyle" data-buttonName="btn-primary" data-input="false" name="enl_con"></input>
         @if($errors->has('enl_con'))
            <span style="color:red;">{{$errors->first('enl_con')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>ITEM</label>
        <input type="text" class="form-control" name="item">
        @if($errors->has('item'))
            <span style="color:red;">{{$errors->first('item')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Cargo</label>
        <input type="text" class="form-control" name="cargo">
        @if($errors->has('cargo'))
            <span style="color:red;">{{$errors->first('cargo')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Haber Basico</label>
        <input type="text" class="form-control" name="hab_bas">
        @if($errors->has('hab_bas'))
            <span style="color:red;">{{$errors->first('hab_bas')}}</span>
        @endif
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
        @if($errors->has('sec_tra'))
            <span style="color:red;">{{$errors->first('sec_tra')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>Tipo de funcionario</label>
        <input type="text" class="form-control" name="tip_fun">
        @if($errors->has('tip_fun'))
            <span style="color:red;">{{$errors->first('tip_fun')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Encargado de Contrato</label>
        <input type="text" class="form-control" name="enc_con"></input>
        @if($errors->has('enc_con'))
            <span style="color:red;">{{$errors->first('enc_con')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Asesor Legal</label>
        <input type="text" class="form-control" name="ase_leg"></input>
        @if($errors->has('ase_leg'))
            <span style="color:red;">{{$errors->first('ase_leg')}}</span>
        @endif
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
