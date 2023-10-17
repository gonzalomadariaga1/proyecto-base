<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
        
        {{--Jquery--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
        <script src="{{asset('dist/js/demo-theme.min.js?1674944402')}}"></script>
    
        <!-- Theme CSS files -->
        <link rel="stylesheet" href="{{asset('dist/css/tabler.min.css')}}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.css">
    
        <style>
          @import url('https://rsms.me/inter/inter.css');
          :root {
              --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
          }
          body {
              font-feature-settings: "cv03", "cv04", "cv11";
          }
          .cssButton{
            background-color: #206bc4 !important;
          }
        </style>
    
        {{-- Scripts CSS --}}
        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
        {{-- DataTables --}}
        <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">

        {{-- BS Stepper --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
    

        @stack('css-styles')
    
    </head>
    <body>
        <div class="page">
            <!-- Navbar -->
            <header class="navbar navbar-expand-md d-print-none" >
              <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="{{route('home')}}" class="logo d-flex align-items-center">
                        <span class="d-none d-lg-block">{{ config('app.name', 'Laravel') }}</span>
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                  {{-- Inicio Accesos Directos --}}
                    @include('layouts.components.accesos_directos')
                  {{-- Fin Accesos Directos --}}

                  {{-- Inicio Modo Oscuro/Claro --}}
                    @include('layouts.components.claro_oscuro')
                  {{-- Fin Modo Oscuro/Claro --}}
                  
                  {{-- Inicio Notificaciones --}}
                    @include('layouts.components.notificaciones')
                  {{-- Fin Notificaciones --}}

                  {{-- Inicio Acceder/Registro --}}
                    @include('layouts.components.acceder_registro')
                  {{-- Fin Acceder/Registro --}}
                </div>
              </div>
            </header>

            @includeWhen(Auth::check(),'layouts.menu')


            <div class="page-wrapper">
              <!-- Page body -->
              <div class="page-body">
                <div class="container-xl d-flex flex-column justify-content-center">
                    @yield('content')
                </div>
              </div>
              @include('layouts.footer')

            </div>
            @include('layouts.components.modals.reportes')
            @include('layouts.components.modals.notificaciones')
          </div>
        <!-- Tabler Core -->
        <script src="{{asset('dist/js/tabler.min.js')}}"></script>
        <script src="{{asset('dist/js/demo-theme.min.js')}}"></script>
        {{-- Bootstrap Select --}}
        <script src="{{asset('dist/js/bs.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-es_ES.min.js"></script>

        {{-- DataTables --}}
        <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
        
        {{-- Bs Stepper --}}
        <script src="	https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>

        @include('layouts.script_notificaciones')
        @include('sweetalert::alert')
        @yield('code_js')
    </body>