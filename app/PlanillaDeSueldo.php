<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class PlanillaDeSueldo extends Model
{
    protected $table="planillas_de_sueldos";
    protected $fillable=[
    			"path"	
    			,"gestion"
                ,"mes"
                ,"total_personal"
                ,"monto_total"
                ,"ubicacion_fisica"
                ,"descripcion"];
    public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
	}
    public function scopeGestion($query,$gestion)
    {
        if($gestion=="Todos")
            return $query->where('gestion', 'like', "%");
        else
            return $query->where('gestion', '=', $gestion);
    }
    public function scopeMes($query,$mes)
    {
        if($mes=="Todos")
            return $query->where('mes', 'like', "%");
        else
            return $query->where('mes', '=', $mes);
    }
	public function scopeListar($query,$gestion,$mes)
	{
		if($gestion!="todos")
			if ($mes!="todos") {
				return $query->where('mes', '=', $mes)->where('gestion', '=', $gestion);
			}
			else
				return $query->where('gestion', '=', $gestion);
		else
			return $query->where('mes', '=', $mes);
	}
}
