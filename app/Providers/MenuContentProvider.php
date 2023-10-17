<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Traits\ConsumeApiNotificaciones;

class MenuContentProvider extends ServiceProvider
{
    use ConsumeApiNotificaciones;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $method = 'GET';
        //AQUI ID DEL PROYECTO 
        $uri= config('services.api_notificaciones.id');

        $this->notificaciones = $this->makeRequest($method,$uri);

        view()->composer('layouts.app', function($view) {
            $view->with(['notificaciones' => $this->notificaciones]);
        });
    }
}
