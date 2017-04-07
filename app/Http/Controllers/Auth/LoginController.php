<?php

namespace sisRRHH\Http\Controllers\Auth;

use sisRRHH\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers,ThrottlesLogins;
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    protected function hasTooManyLoginAttempts(Request $request)
    {
        $maxNumeroIntentos = 3; //3 intentos

        $tiempoEspera = 1; // Un minuto

        return $this->limiter()->tooManyAttempts(
            $this->throttleKey($request), $maxNumeroIntentos, $tiempoEspera
        );
    }
}
