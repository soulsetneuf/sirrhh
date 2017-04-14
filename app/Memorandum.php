<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Memorandum extends Model
{
	protected $table="memorandum";
    protected $fillable=[
 				"path"
                ,"tipo_de_memorandum_id"
                ,"numero_memorandum"
                ,'fecha_asignacion'
                ,'fecha_designacion'
                ,"numero_tomo"
                ,"ubicacion_fisica"
                ,"notificador_id"
                ,"notificado_id"
                ,"lugar"
                ,"motivo"];

    //Guardar direccion de imagen path
    public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;//cambia el nombre y lo guardar en la base
		\Storage::disk('local')->put($name, \File::get($path));//guardar la imagen en la carpeta del proyecto
	}
	public function scopeAsignacion($query,$fecha_inicio,$fecha_fin)
	{
		return $query->whereBetween('fecha_asignacion', array($fecha_inicio, $fecha_fin));
	}
    public function notificador()
    {
        return $this->hasOne('sisRRHH\funcionario', 'id', 'notificador_id');
    }
    public function notificado()
    {
        return $this->hasOne('sisRRHH\funcionario', 'id', 'notificado_id');
    }
    public function memorandum()
    {
        return $this->hasOne('sisRRHH\TipoDeMemorandum', 'id', 'tipo_de_memorandum_id');
    }
    public function scopeListar($query,$notificado_id,$tipo_memorandum)
    {
        if($tipo_memorandum=="Todos")
            return $query->where('notificado_id', '=', $notificado_id);
        else
            return $query->where('notificado_id', '=', $notificado_id)->where("tipo_de_memorandum_id","=",$tipo_memorandum);
    }
}
