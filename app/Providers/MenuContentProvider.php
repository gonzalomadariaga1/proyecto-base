<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Traits\ConsumeApi;

class MenuContentProvider extends ServiceProvider
{
    use ConsumeApi;
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
        $uri= config('services.api_manage.id');

        $this->notificaciones = $this->makeRequestNotificaciones($method,$uri);

        view()->composer('layouts.app', function($view) {
            $view->with(['notificaciones' => $this->notificaciones]);
        });
    }
}
