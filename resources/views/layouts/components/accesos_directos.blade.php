@auth
    <div class="nav-item d-none d-md-flex me-3">
        <div class="btn-list">
        <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="btn-radio-dropdown" id="btn-radio-dropdown-dropdown" autocomplete="off">
            <label for="btn-radio-dropdown-dropdown" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Accesos directos
            </label>
            <div class="dropdown-menu" >
            @can('admin-user-create')
                <a class="dropdown-item" href="{{route('admin.users.create')}}" >
                Crear usuario
                </a>
            @endcan

            @can('admin-role-create')
                <a class="dropdown-item" href="{{route('admin.roles.create')}}" >
                Crear rol
                </a>
            @endcan


            <a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#modal-report"> Reportar error </a>
            
            
            </div>
        </div>
        </div>
    </div>
@endauth