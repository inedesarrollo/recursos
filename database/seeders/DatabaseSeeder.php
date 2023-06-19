<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\RolSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

    //$this->call(MenuSeeder::class);
      //  $this->call(PermisoSeeder::class);
        $this->call(RolSeeder::class);
       // $this->call(MonedaSeeder::class);
       // $this->call(EmpleadoSeeder::class);
        //$this->call(UsuarioSeeder::class);
        //$this->call(CorrelativoSeeder::class);


        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@ine.gob.gt';
        $user->password = '1234';
        $user->role = 'admin';
        $user->save();
        $user->assignRole('Admin');


        $user = new User;
        $user->name = 'jppelico';
        $user->email = 'jppelico@ine.gob.gt';
        $user->password = '1234';
        $user->role = '';
        $user->save();
        $user->assignRole('Admin');

        $user = new User;
        $user->name = 'arcordero';
        $user->email = 'arcordero@ine.gob.gt';
        $user->password = '1234';
        $user->role = '';
        $user->save();


    }
}
