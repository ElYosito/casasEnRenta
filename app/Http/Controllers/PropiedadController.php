<?php

namespace App\Http\Controllers;

use App\Models\Colonia;
use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedad = new Propiedad();
        $colonias = Colonia::all();

        $propiedads = Propiedad::where('edoPropiedad', '!=', 'eliminada')->get();
        return view('index', compact('propiedads', 'colonias', 'propiedad'));
    }

    public function catalogo()
    {
        $colonias = Colonia::all();

        $propiedades = Propiedad::where('edoPropiedad', '!=', 'eliminada')->paginate(7);

        return view('arrendador.catalogo', compact('propiedades', 'colonias'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propiedad = new Propiedad();
        return view('formulario', compact('propiedad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos de la propiedad
        $propiedadValidada = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fechaPub' => 'required',
            'habitaciones' => 'required',
            'tipoCasa' => 'required',
            'tipoA' => 'required',
            'tipoPropiedad' => 'required',
            'ubicacion' => 'required',
            'servicios' => 'required',
            'precio' => 'required',
            'edoPropiedad' => 'required'
        ]);

        // Convierte el campo servicios a una cadena JSON
        $servicios = json_encode($propiedadValidada['servicios']);
        $propiedadValidada['servicios'] = $servicios;

        // Crea una nueva propiedad en la base de datos
        Propiedad::create($propiedadValidada);

        // Completa otros campos de la propiedad si es necesario

        // Almacena las imágenes
        if ($request->hasFile('images')) {
            $propiedadId = Propiedad::latest()->first()->id; // Obtén el ID de la propiedad recién creada

            foreach ($request->file('images') as $image) {
                $nombreDoc = Str::slug($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/propiedades/' . $propiedadId . '/' . $nombreDoc);
            }
        }

        return redirect()->route("arrendador.catalogo");
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
