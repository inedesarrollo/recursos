<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class EmpleadoController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Modelo = new Empleado;
        $direccion = 'empleado.index';
        $home = 'home';


            $datas = Empleado::orderBy('empl_id')->get();


            return view($direccion, compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $Modelo = new Empleado();
        $direccion = 'empleado.crear';




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
        $Modelo = new Empleado();
        $direccion = 'empleado';


            Empleado::create($request->all());


            return redirect('empleado')->with('mensaje', 'Empleado creada exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $Modelo = new Empleado();
        $direccion = 'empleado.editar';



            return view($direccion, compact('data'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        $Modelo = new Empleado();
        $direccion = 'empleado';


            Empleado::findOrFail($id)->update($request->all());


            return redirect($direccion)->with('mensaje', 'Empleado actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Modelo = new Empleado();
        $direccion = 'empleado';

        try{
            try {
                Empleado::destroy($id);
            } catch (Exception $e) {


                return redirect($direccion)->withErrors(['catch', $e->getMessage()]);
            }


            return redirect($direccion)->with('mensaje', 'Empleado eliminanda correctamente.');
        }
        catch (QueryException $e)
        {


            return redirect()->back()->withErrors(['No fue posible eliminar los datos de la Empleado.']);
        }
        catch (Exception $e)
        {


            return redirect()->back()->withErrors(['No fue posible eliminar los datos de la Empleado.']);
        }
    }
}

