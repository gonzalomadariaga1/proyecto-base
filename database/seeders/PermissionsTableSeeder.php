<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /**
         * Admin / Users
         * 
         */
        Permission::updateOrCreate(['name' => UsersController::PERMISSIONS['create']],[
            'group_name' => 'Usuarios',
            'description' => 'Creación de usuarios'
        ]);

        Permission::updateOrCreate(['name' => UsersController::PERMISSIONS['show']],[
            'group_name' => 'Usuarios',
            'description' => 'Listado y detalle de usuarios'
        ]);

        Permission::updateOrCreate(['name' => UsersController::PERMISSIONS['edit']],[
            'group_name' => 'Usuarios',
            'description' => 'Edición de usuarios'
        ]);


        /**
         * Admin / Role
         */
        Permission::updateOrCreate(['name' => RolesController::PERMISSIONS['create']], [
            'group_name' => 'Roles',
            'description' => 'Creación de roles'
        ]);
        Permission::updateOrCreate(['name' => RolesController::PERMISSIONS['show']], [
            'group_name' => 'Roles',
            'description' => 'Listado y detalle de roles'
        ]);
        Permission::updateOrCreate(['name' => RolesController::PERMISSIONS['edit']], [
            'group_name' => 'Roles',
            'description' => 'Edición de rol'
        ]);
        Permission::updateOrCreate(['name' => RolesController::PERMISSIONS['delete']], [
            'group_name' => 'Roles',
            'description' => 'Eliminación de roles'
        ]);
    }
}
