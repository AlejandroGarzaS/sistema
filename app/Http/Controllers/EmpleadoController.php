<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Empleado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response(view('empleado.index')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return response(view('empleado.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
      $datosEmpleado = request()->except('_token');
      Empleado :: insert($datosEmpleado);
      return response()->  json($datosEmpleado);  //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado): RedirectResponse
    {
        //
    }
}
