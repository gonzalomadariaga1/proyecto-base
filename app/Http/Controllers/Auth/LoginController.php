<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Añade la verificación del campo "estado" aquí
        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            
            // Verifica el campo "estado"
            if ($user->estado == 1) {
                return $this->sendLoginResponse($request);
            }else {
                $this->guard()->logout();
                $request->session()->invalidate();
                return $this->sendFailedLoginResponse($request, '' , 0);
            }
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request, $message = null , $estado = null)
    {

        if ( $estado == 0){
            // caso cuenta inactiva
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.failed')],
                'estado' => [$message], // Agrega el mensaje personalizado para el campo "estado"
            ])->redirectTo(route('login'));

        }

        //dd($estado);

        
    }
}
