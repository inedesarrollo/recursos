<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\piloto;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    public function index(Request $request)
    {
        $Modelo = new piloto;
        $direccion = 'piloto.index';
        $home = 'home';


            $datas = piloto::orderBy('pil_id')->get();


            return view($direccion, compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $Modelo = new piloto();
        $direccion = 'piloto.crear';




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
        $Modelo = new piloto();
        $direccion = 'piloto';


            piloto::create($request->all());


            return redirect('piloto')->with('mensaje', 'piloto creada exitosamente.');

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
        $Modelo = new piloto();
        $direccion = 'piloto.editar';



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
        $Modelo = new piloto();
        $direccion = 'piloto';


            piloto::findOrFail($id)->update($request->all());


            return redirect($direccion)->with('mensaje', 'piloto actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Modelo = new piloto();
        $direccion = 'piloto';


            try {
                piloto::destroy($id);
            } catch (Exception $e) {


                return redirect($direccion)->withErrors(['catch', $e->getMessage()]);
            }


            return redirect($direccion)->with('mensaje', 'piloto eliminanda correctamente.');
        }
}
