<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValidacionMoneda;
use App\Models\Admin\Moneda;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Modelo = new Moneda;
        $direccion = 'admin.moneda.index';
        $home = 'home';

        try{
            $datas = Moneda::orderBy('mon_id')->get();
            ActivityLogNavegacion($request, $Modelo, $direccion.' success');

            return view($direccion, compact('datas'));
        }
        catch (QueryException $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error BD '.$e->getMessage());

            return redirect()->route($home)->withErrors(['No fue posible cargar la lista de las Monedas.']);
        }
        catch (Exception $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error Aplicacion '.$e->getMessage());

            return redirect()->route($home)->withErrors(['No fue posible cargar la lista de las Monedas.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $Modelo = new Moneda;
        $direccion = 'admin.moneda.crear';

        try{
            ActivityLogNavegacion($request, $Modelo, $direccion.' success');

            return view($direccion);
        }
        catch (QueryException $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error BD '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible cargar el formulario nueva Moneda.']);
        }
        catch (Exception $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error Aplicacion '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible cargar el formulario nueva Moneda.']);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionMoneda $request)
    {
        $Modelo = new Moneda;
        $direccion = 'admin/moneda';

        try{
            Moneda::create($request->all());
            ActivityLogNavegacion($request, $Modelo, $direccion.' success');

            return redirect('admin/moneda')->with('mensaje', 'Moneda creada exitosamente.');
        }
        catch (QueryException $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error BD '.$e->getMessage());

            return redirect()->route($direccion)->withErrors(['No fue posible guardar los datos de la Moneda.']);
        }
        catch (Exception $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error Aplicacion '.$e->getMessage());

            return redirect()->route($direccion)->withErrors(['No fue posible guardar los datos de la Moneda.']);
        }
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
        $Modelo = new Moneda;
        $direccion = 'admin.moneda.editar';

        try{
            $data = Moneda::findOrFail($id);
            ActivityLogNavegacion($request, $Modelo, $direccion.' success');

            return view($direccion, compact('data'));
        }
        catch (QueryException $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error BD '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible mostrar el formulario de la Moneda.']);
        }
        catch (Exception $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error Aplicacion '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible mostrar el formulario de la Moneda.']);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionMoneda $request, $id)
    {
        $Modelo = new Moneda;
        $direccion = 'admin/moneda';

        try{
            Moneda::findOrFail($id)->update($request->all());
            ActivityLogNavegacion($request, $Modelo, $direccion.' success');

            return redirect($direccion)->with('mensaje', 'Moneda actualizada correctamente.');
        }
        catch (QueryException $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error BD '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible actualizar los datos de la Moneda.']);
        }
        catch (Exception $e)
        {
            ActivityLogNavegacion($request, $Modelo, $direccion.' Error Aplicacion '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible actualizar los datos de la Moneda.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Modelo = new Moneda;
        $direccion = 'admin/moneda';

        try{
            try {
                Moneda::destroy($id);
            } catch (Exception $e) {
                ActivityLogNavegacion($request, $Modelo, $direccion.' success');

                return redirect($direccion)->withErrors(['catch', $e->getMessage()]);
            }
            ActivityLogNavegacion($request, $Modelo, $direccion.' success');

            return redirect($direccion)->with('mensaje', 'Moneda eliminanda correctamente.');
        }
        catch (QueryException $e)
        {
            ActivityLogNavegacion($request, $Modelo, redirect()->back()->headers->all()['location'][0].' Error BD '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible eliminar los datos de la Moneda.']);
        }
        catch (Exception $e)
        {
            ActivityLogNavegacion($request, $Modelo, redirect()->back()->headers->all()['location'][0].' Error Aplicacion '.$e->getMessage());

            return redirect()->back()->withErrors(['No fue posible eliminar los datos de la Moneda.']);
        }
    }
}
