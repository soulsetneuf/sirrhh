<?php
use Illuminate\Support\Facades\Input;
use sisRRHH\funcionario;
use sisRRHH\Familiar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); //login,register





Route::resource('/contratos','contratos');//create,edit,

Route::get('/contratos/{id_dat}/{nombre}/{ci}', 'contratos@create');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('/funcionarios','funcionarios');
    Route::resource('tipos_de_contratos','TipoDeContratoController');
    Route::resource('tipos_de_memorandum','TipoDeMemorandumController');
    Route::resource('cargos','CargoController');
    Route::resource('areas','AreaController');
    Route::resource('profesiones','ProfesionController');
    Route::resource('planillas_de_subsidios','PlanillaDeSubsidioController');
    Route::resource('planillas_de_asistencia','PlanillaDeAsistenciaController');
    Route::resource('planillas_de_sueldos','PlanillaDeSueldoController');
    Route::resource('memorandum','MemorandumController');
    Route::resource('familiares','FamiliarController');
    Route::resource('subsidios','SubsidioController');

    
    Route::get("report/planillas_de_subsidios",'PlanillaDeSubsidioController@report')->name('planillas_de_subsidios.report');
    Route::get("report/planillas_de_asistencia",'PlanillaDeAsistenciaController@report')->name('planillas_de_asistencia.report');
    Route::get('report/planillas_de_sueldos','PlanillaDeSueldoController@report')->name('planillas_de_sueldos.report');
    Route::get('report/memorandum','MemorandumController@report')->name('memorandum.report');


    Route::get('dropdown', function(){
        $id = Input::get('option');
        $familiares = funcionario::find($id)->familiares;
        return $familiares->pluck('tipo_parentesco', 'id');
    });



    });

/*
Route::get("mi_ruta",function ()
	                 {
						 return view('welcome');
	                 }
	);

Route::group(['prefix' => 'rrhh'], function () {
	Route::resource('/funcionarios','funcionarios');

});
Route::group(['prefix' => 'administrativa'], function () {
	Route::resource('/contratos','contratos');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/funcionarios','funcionarios');

Route::resource('/contratos','contratos');

Route::get('/contratos/{id_dat}/{nombre}/{ci}', 'contratos@create');
*/