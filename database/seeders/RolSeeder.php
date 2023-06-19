<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1= Role::create(['name'=> 'Admin']);
        Permission::create(['name'=> 'rrhh'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.crear'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.mostrar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.guardar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.editar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.editar1'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.actualizar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rrhh.eliminar'])->syncRoles([$rol1]) ;


        Permission::create(['name'=> 'rol'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rol.crear'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rol.mostrar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rol.guardar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rol.editar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rol.actualizar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'rol.eliminar'])->syncRoles([$rol1]) ;
        Permission::create(['name'=> 'rol.asignarPermisos'])->syncRoles([$rol1]) ;

        Permission::create(['name'=> 'usuario'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'usuario.crear'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'usuario.mostrar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'usuario.guardar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'usuario.editar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'usuario.actualizar'])->syncRoles([$rol1]);
        Permission::create(['name'=> 'usuario.eliminar'])->syncRoles([$rol1]) ;
        Permission::create(['name'=> 'usuario.asignarPermisos'])->syncRoles([$rol1]) ;



    }
}
