<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Models\Ausencia as ModelsAusencia;
use App\Models\Ausencia;

class AusenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Modelo = new Ausencia;
        $direccion = 'ausencias.index';
        $home = 'home';


            $datas = ModelsAusencia::orderBy('ausen_id')->get();


            return view($direccion, compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $Modelo = new Ausencia;
        $direccion = 'ausencias.crear';



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
        $Modelo = new Ausencia;
        $direccion = 'ausencia';


            ModelsAusencia::create($request->all());


            return redirect('ausencia')->with('mensaje', 'Moneda creada exitosamente.');

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
        $Modelo = new Ausencia;
        $direccion = 'ausencias.editar';


            $data = ModelsAusencia::findOrFail($id);


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
        $Modelo = new Ausencia;
        $direccion = 'ausencia';


            ModelsAusencia::findOrFail($id)->update($request->all());

            return redirect($direccion)->with('mensaje', 'Moneda actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Modelo = new Ausencia;
        $direccion = 'ausencia';

        try{
            try {
                ModelsAusencia::destroy($id);
            } catch (Exception $e) {

                return redirect($direccion)->withErrors(['catch', $e->getMessage()]);
            }

            return redirect($direccion)->with('mensaje', 'Moneda eliminanda correctamente.');
        }
        catch (QueryException $e)
        {


            return redirect()->back()->withErrors(['No fue posible eliminar los datos de la Moneda.']);
        }
        catch (Exception $e)
        {


            return redirect()->back()->withErrors(['No fue posible eliminar los datos de la Moneda.']);
        }
    }
}
