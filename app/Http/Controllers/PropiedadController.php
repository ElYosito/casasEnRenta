<?php

namespace App\Http\Controllers;

use App\Models\Colonia;
use App\Models\Propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedad = new Propiedad();
        $colonias = Colonia::all();
        
        $propiedades = Propiedad::where('edoPropiedad', '!=', 'eliminada')->get();
        return view('index', compact('propiedades', 'colonias','propiedad'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Propiedad $propiedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Propiedad $propiedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propiedad $propiedad)
    {
        //
    }
}
