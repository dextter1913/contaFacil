<?php

namespace App\Http\Controllers;

use App\Models\serviciosPublicos;
use Illuminate\Http\Request;

class ServiciosPublicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = [];
        $datos['Facturas'] = serviciosPublicos::paginate(5);
        return view('serviciosPublicos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     * CONTROLADOR DE LA VISTA DE CREACION DE SERVICIOS PUBLICOS
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviciosPublicos.create');
    }

    /**
     * Store a newly created resource in storage.
     * ALMACENANDO LOS DATOS EN LA BASE DE DATOS Y EL PDF EN
     * storage\app\public\pdfFacturas\
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request['_token'])) {
            if ($request->hasFile('pdf')) {
                $datosFactura = [];
                $datosFactura = $request->except('_token');
                $datosFactura['fechaPagoReal']    = date('Y-m-d', strtotime($datosFactura['fechaPagoReal']));
                $datosFactura['fechaPago']        = date('Y-m-d', strtotime($datosFactura['fechaPago']));
                $datosFactura['fechaVencimiento'] = date('Y-m-d', strtotime($datosFactura['fechaVencimiento']));
                $datosFactura['pdf'] = $request->file('pdf')->store('public/pdfFacturas');
                $response = serviciosPublicos::insert($datosFactura);
                if ($response == true) {
                    $message = [
                        'message'    => 'Factura creada correctamente',
                        'alert-type' => 'success'
                    ];
                } else {
                    $message = [
                        'message'    => 'Error al crear la factura',
                        'alert-type' => 'error'
                    ];
                }
            } else {
                $message = [
                    'message'    => 'Error al Guardar el PDF',
                    'alert-type' => 'error'
                ];
            }
        } else {
            $message = [
                'message'    => 'Error token invalido',
                'alert-type' => 'error'
            ];
        }
        return response()->json($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serviciosPublicos  $serviciosPublicos
     * @return \Illuminate\Http\Response
     */
    public function show(serviciosPublicos $serviciosPublicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serviciosPublicos  $serviciosPublicos
     * @return \Illuminate\Http\Response
     */
    public function edit(serviciosPublicos $serviciosPublicos)
    {
        return view('serviciosPublicos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serviciosPublicos  $serviciosPublicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviciosPublicos $serviciosPublicos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * ELIMINA EL DATO ESPECIFICO DE LA BASE DE DATOS
     * 
     * @param  \App\Models\serviciosPublicos  $serviciosPublicos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $response = serviciosPublicos::destroy($id);
        if ($response == true) {
            $message = [
                'message'    => 'Factura eliminada correctamente',
                'alert-type' => 'success'
            ];
        } else {
            $message = [
                'message'    => 'Error al eliminar la factura',
                'alert-type' => 'error'
            ];
        }
        return response()->json($message);
    }
}
