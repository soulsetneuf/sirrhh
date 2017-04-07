<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PlanillaDeSubsidio extends Model
{
	protected $table="planillas_de_subsidios";
    protected $fillable=[
    			"path"	
    			,"gestion"
                ,"mes"
                ,"beneficiarios"
                ,"monto_total"
                ,"descripcion"];
    public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
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

	public function scopeReport($query)
	{
		return $query->where('gestion','=','1990');
	}
}
