<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Modificar Contrato</h2>    
    <hr>
</div>
<div class="col-lg-12">
<form role="form" method="POST" action="{{ route('contratos.update',$contrato->id)}}" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">
<input type="text" class="hide" name="enl" value="{{$contrato->enl_con}}" />
{{csrf_field()}}
    <div class="box">
    <div class="form-group col-lg-3">
        <label>Id de Usuario</label>
        <select type="text" class="form-control" name="id_dat">
            <option value="{{$contrato->id_dat}}">{{$contrato->id_dat}}</option>
        </select> 
    </div>
     <div class="form-group col-lg-9">
        <label>Contrato</label>
        <input type="file" class="form-control filestyle" data-buttonName="btn-primary" data-input="false" name="enl_con">
         @if($errors->has('enl_con'))
            <span style="color:red;">{{$errors->first('enl_con')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>ITEM</label>
        <input type="text" class="form-control" name="item" value="{{$contrato->item}}">
        @if($errors->has('item'))
            <span style="color:red;">{{$errors->first('item')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Cargo</label>
        <input type="text" class="form-control" name="cargo" value="{{$contrato->cargo}}">
        @if($errors->has('cargo'))
            <span style="color:red;">{{$errors->first('cargo')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Haber Basico</label>
        <input type="text" class="form-control" name="hab_bas" value="{{$contrato->hab_bas}}">
        @if($errors->has('hab_bas'))
            <span style="color:red;">{{$errors->first('hab_bas')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Inicio</label>
        <input type="date" class="form-control" name="fec_ini" value="{{$contrato->fec_ini}}">
    </div>
    <div class="form-group col-lg-6">
        <label>Fecha de Conclusion</label>
        <input type="date" class="form-control" name="fec_con" value="{{$contrato->fec_con}}">
    </div>
    <div class="form-group col-lg-6">
        <label>Destino de Ubicacion</label>
        <select type="text" class="form-control" name="des_ubi" value="{{$contrato->des_ubi}}">
            <option value="Sedeca">Gabeta</option>
            <option value="Maestranza">Tomo</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Sector/Trabajo</label>
        <input type="text" class="form-control" name="sec_tra" value="{{$contrato->sec_tra}}">
        @if($errors->has('sec_tra'))
            <span style="color:red;">{{$errors->first('sec_tra')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-12">
        <label>Tipo de funcionario</label>
        <input type="text" class="form-control" name="tip_fun" value="{{$contrato->tip_fun}}">
        @if($errors->has('tip_fun'))
            <span style="color:red;">{{$errors->first('tip_fun')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Encargado de Contrato</label>
        <input type="text" class="form-control" name="enc_con" value="{{$contrato->enc_con}}"></input>
        @if($errors->has('enc_con'))
            <span style="color:red;">{{$errors->first('enc_con')}}</span>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label>Asesor Legal</label>
        <input type="text" class="form-control" name="ase_leg" value="{{$contrato->ase_leg}}"></input>
        @if($errors->has('ase_leg'))
            <span style="color:red;">{{$errors->first('ase_leg')}}</span>
        @endif
    </div>

    <div class="form-group col-lg-12">
        <label>Observaciones</label>
        <textarea type="text" class="form-control" name="obs" value="{{$contrato->obs}}">{{$contrato->obs}}</textarea> 
        
    </div>
    </div>
    <center>
        <button type="bottom" class="btn btn-primary">Modificar</button>
    </center><br> 
    <center>
        <a href="/home" class="btn btn-warning">Cancelar/Sin Contrato</a>
    </center>                       
    </form>
</div>
