<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use Exception;

use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{

    public function index(Request $request)
    {
        $Modelo = new Role();
        $direccion = 'rol.index';
        $home = 'home';


            $datas = Role::orderBy('id')->get();

            return view($direccion, compact('datas'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $Modelo = new Role();
        $direccion = 'rol.crear';
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



        $Modelo = new Role();
        $direccion = 'rol';

     //dd($request);

        Role::create($request->all());


            return redirect('rol')->with('mensaje', 'Rol creado exitosamente.');

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
        $Modelo=new Role();
        $direccion='rol.mostrar';




            $data = Role::findOrFail($id);

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
        $Modelo = new Role();
        $direccion = 'rol.editar';

        $data = Role::findOrFail($id);
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

        $Modelo = new Role();
        $direccion = 'rol';


        Role::findOrFail($id)->update($request->all());
        return redirect($direccion)->with('mensaje', 'Rol actualizado correctamente.');




    }


    public function asignarPermisos(Request $request, $id)
    {
        $Modelo = new Role;
        $direccion = 'rol.permisos';


            $data = Role::join('role_has_permissions', 'role_id', 'roles.id')->join('permissions', 'permission_id', 'permissions.id')->where('role_id', $id)->select('permissions.*')->get();
            $data2= new Permission();
            $data3=Role::findById($id);
            //dd($data2->get()[1]->toArray()["id"]);
          //dd($data->toArray());
            //dd(array_search($data2->get()[1]->toArray(),$data->toArray()));


            return view($direccion, compact('data','data2', 'data3'));

    }


    public function guardarPermisos(Request $request) {

        $direccion = 'rol';

        //dd($request->toArray());
        foreach($request->all() as $item => $cambios)
        {
            $rol = new Role;
            if ($cambios=='on') {
                $rol->findByName($request->rol)->givePermissionTo($item);
            } elseif($cambios=='off') {
                $rol->findByName($request->rol)->revokePermissionTo($item);
            }

        }

        return redirect($direccion)->with('mensaje', 'Rol Guardado correctamente.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Modelo = new Role();
        $direccion = 'rol';


            try {
                Role::destroy($id);
            } catch (Exception $e) {


                return redirect($direccion)->withErrors(['catch', $e->getMessage()]);
            }


            return redirect($direccion)->with('mensaje', 'Rol eliminado correctamente.');
        }

}
