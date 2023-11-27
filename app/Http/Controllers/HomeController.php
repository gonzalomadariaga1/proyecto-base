<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ConsumeApi;

class HomeController extends Controller
{
    use ConsumeApi;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function marcar_leida($proyectos_notificaciones_id){

        $method = 'PATCH';
        $uri= $proyectos_notificaciones_id . '/leido';

        return $this->makeRequestNotificaciones($method,$uri);

    }
}
