<div class="nav-item dropdown">
    @guest
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url('{{asset('static/avatars/000m2.png')}}"></span>
            <div class="d-none d-xl-block ps-2">
            <div>{{ __('Login') }} / {{ __('Register') }}</div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="dropdown-item">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="dropdown-item">{{ __('Register') }}</a>
            @endif
        </div>
    @else
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url('{{asset('static/avatars/000m2.png')}}"></span>
            <div class="d-none d-xl-block ps-2">
                    <div>{{Auth::user()->name}}</div>
                    <div class="mt-1 small text-muted">
                        @if ( Auth::user()->getRoleNames()->isEmpty()  )
                        Sin rol
    
                        @else
                        @foreach (Auth::user()->getRoleNames() as $rol )
                            {{ $rol}} 
                        @endforeach
                        @endif
                    </div>
            </div>
        </a>
    
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endguest    

  </div>