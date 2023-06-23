<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\rrhhController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pilotoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('rrhh/pdf', [rrhhController::class, 'pdf'])->name('rrhh.pdf');


Route::get('rrhh/{id}/pdf2', [rrhhController::class, 'pdf2'])->name('rrhh.pdf2');

Route::get('rrhh/{id}/editar', [rrhhController::class, 'edit'])->name('rrhh.editar');


Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');


    //esto es solicitud de hora extra
    Route::get('rrhh', [rrhhController::class, 'index'])->name('rrhh')->middleware(['auth', 'can:rrhh']);
    Route::get('rrhh/crear',  [rrhhController::class, 'create'])->name('rrhh.crear')->middleware(['auth', 'can:rrhh.crear']);
    Route::get('rrhh/{id}/mostrar',  [rrhhController::class, 'show'])->name('rrhh.mostrar')->middleware(['auth', 'can:rrhh.mostrar']);
    Route::post('rrhh',  [rrhhController::class, 'store'])->name('rrhh.guardar')->middleware(['auth', 'can:rrhh.guardar']);
    Route::get('rrhh/{id}/editar',  [rrhhController::class, 'edit'])->name('rrhh.editar')->middleware(['auth', 'can:rrhh.editar']);
    Route::get('rrhh/{id}/editar1',  [rrhhController::class, 'edit1'])->name('rrhh.editar1')->middleware(['auth', 'can:rrhh.editar1']);
    Route::put('rrhh/{id}',  [rrhhController::class, 'update'])->name('rrhh.actualizar')->middleware(['auth', 'can:rrhh.actualizar']);
    Route::get('rrhh/{id}/eliminar',  [rrhhController::class, 'destroy'])->name('rrhh.eliminar')->middleware(['auth', 'can:rrhh.eliminar']);
    Route::get('rrhh/{id}/pdf',  [rrhhController::class, 'pdf'])->name('rrhh.pdf')->middleware(['auth', 'can:rrhh.mostrar']);
    Route::get('rrhh/{id}/word',  [rrhhController::class, 'word'])->name('rrhh.word')->middleware(['auth', 'can:rrhh.mostrar']);

    Route::get('rrhh/{id}/buscar',  [rrhhController::class, 'buscar'])->name('rrhh.buscar')->middleware(['auth', 'can:rrhh.mostrar']);



    //piloto
    Route::get('piloto', [PilotoController::class, 'index'])->name('piloto');
    Route::get('piloto/crear',  [PilotoController::class, 'create'])->name('piloto.crear');
    Route::post('piloto',  [PilotoController::class, 'store'])->name('piloto.guardar');
    Route::get('piloto/{id}/editar',  [PilotoController::class, 'edit'])->name('piloto.editar');
    Route::put('piloto/{id}',  [PilotoController::class, 'update'])->name('piloto.actualizar');
    Route::get('piloto/{id}/eliminar',  [PilotoController::class, 'destroy'])->name('piloto.eliminar');





    //Rol
 Route::get('rol', [RolController::class, 'index'])->name('rol')->middleware(['auth', 'can:rol']);
 Route::get('rol/crear',  [RolController::class, 'create'])->name('rol.crear')->middleware(['auth', 'can:rol.crear']);
 Route::get('rol/{id}/mostrar',  [RolController::class, 'show'])->name('rol.mostrar')->middleware(['auth', 'can:rol.mostrar']);
 Route::post('rol',  [RolController::class, 'store'])->name('rol.guardar')->middleware(['auth', 'can:rol.guardar']);
 Route::get('rol/{id}/editar',  [RolController::class, 'edit'])->name('rol.editar')->middleware(['auth', 'can:rol.editar']);
 Route::get('rol/{id}/asignarPermisos',  [RolController::class, 'asignarPermisos'])->name('rol.asignarPermisos');
 Route::post('rol/guardarPermisos',  [RolController::class, 'guardarPermisos'])->name('rol.guardarPermisos');
 Route::put('rol/{id}',  [RolController::class, 'update'])->name('rol.actualizar')->middleware(['auth', 'can:rol.actualizar']);
 Route::get('rol/{id}/eliminar',  [RolController::class, 'destroy'])->name('rol.eliminar')->middleware(['auth', 'can:rol.eliminar']);





   //usuario
   Route::get('usuario', [UsuarioController::class, 'index'])->name('usuario')->middleware(['auth', 'can:usuario']);
   Route::get('usuario/crear',  [UsuarioController::class, 'create'])->name('usuario.crear')->middleware(['auth', 'can:usuario.crear']);
   Route::get('usuario/{id}/mostrar',  [UsuarioController::class, 'show'])->name('usuario.mostrar')->middleware(['auth', 'can:usuario.mostrar']);
   Route::post('usuario',  [UsuarioController::class, 'store'])->name('usuario.guardar')->middleware(['auth', 'can:usuario.guardar']);
   Route::get('usuario/{id}/editar',  [UsuarioController::class, 'edit'])->name('usuario.editar')->middleware(['auth', 'can:usuario.editar']);
   Route::get('usuario/{id}/editar1',  [UsuarioController::class, 'edit1'])->name('usuario.editar1')->middleware(['auth', 'can:usuario.editar1']);
   Route::put('usuario/{id}',  [UsuarioController::class, 'update'])->name('usuario.actualizar')->middleware(['auth', 'can:usuario.actualizar']);
   Route::get('usuario/{id}/eliminar',  [UsuarioController::class, 'destroy'])->name('usuario.eliminar')->middleware(['auth', 'can:usuario.eliminar']);
   Route::get('usuario/{id}/asignarRol',  [UsuarioController::class, 'asignarRol'])->name('usuario.asignarRol');
   Route::post('usuario/guardarRol',  [UsuarioController::class, 'guardarRol'])->name('usuario.guardarRol');

