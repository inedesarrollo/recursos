<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;

class UsuarioController extends Controller
{
    //

        public function index(Request $request)
        {
            $Modelo = new User;
            $direccion = 'usuario.index';
            $home = 'home';


                $datas = User::orderBy('id')->get();

                return view($direccion, compact('datas'));

        }





        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {

            $Modelo = new User();
            $direccion = 'usuario.crear';
                return view($direccion);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {



            $Modelo = new User();
            $direccion = 'usuario';

         //dd($request);

         User::create($request->all());


                return redirect('usuario')->with('mensaje', 'usuario creada exitosamente.');

        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Request $request, $id)
        {
            //dd($request);
            $Modelo=new User;
            $direccion='usuario.mostrar';




                $data = User::findOrFail($id);

                return view($direccion, compact('data'));




        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Request $request, $id)
        {
            $Modelo = new User();
            $direccion = 'usuario.editar';

            $data = User::findOrFail($id);
            return view($direccion, compact('data'));


        }



        public function edit1(Request $request, $id)
        {
            $Modelo = new User();
            $direccion = 'usuario.editar1';

            $data = User::findOrFail($id);
            return view($direccion, compact('data'));


        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {

            $Modelo = new User();
            $direccion = 'usuario';


            User::findOrFail($id)->update($request->all());
            return redirect($direccion)->with('mensaje', 'usuario actualizado correctamente.');




        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Request $request, $id)
        {
            $Modelo = new User();
            $direccion = 'usuario';


                try {
                    User::destroy($id);
                } catch (Exception $e) {


                    return redirect($direccion)->withErrors(['catch', $e->getMessage()]);
                }


                return redirect($direccion)->with('mensaje', 'usuario eliminanda correctamente.');
            }




            public function asignarRol(Request $request, $id) {
                $Modelo = new User;
                $direccion = 'usuario.permisos';


                    $data = User::findOrFail($id);
                    $roles = Role::join('model_has_roles', 'role_id', 'roles.id')->where('model_id', $id)->get();
                    $rolestodos = Role::get();



                    return view($direccion, compact('data','roles','rolestodos'));

                    //return redirect($direccion)->with('mensaje', 'usuario actualizado correctamente.');

            }


            public function guardarRol(Request $request) {

                $direccion = 'usuario';


                //dd($request->all());
             $usuario = new User();
             foreach($request->all() as $item => $cambios) {



                if ($cambios=='on') {
                    $usuario->find($request->usuario)->assignRole($item);
                } elseif($cambios=='off') {

                 $usuario->find($request->usuario)->removeRole($item);
                }






             }


         return redirect($direccion)->with('mensaje', 'Rol Guardado correctamente.');
     }



    }
