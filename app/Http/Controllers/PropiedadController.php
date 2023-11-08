<?php

namespace App\Http\Controllers;

use App\Models\Colonia;
use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            $contador = 1; // Inicializa un contador para el nombre de la imagen

            foreach ($request->file('images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $nombreDoc = 'imagen' . $contador . '.' . $extension;
                $image->storeAs('public/propiedades/' . $propiedadId, $nombreDoc);
                $contador++;
            }
        }


        return redirect()->route("arrendador.catalogo");
    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $propiedad = Propiedad::find($id); // Obtiene la propiedad por su ID

        if (!$propiedad) {
            // Si la propiedad no existe, puedes manejarlo de acuerdo a tus necesidades, por ejemplo, redirigir o mostrar un error.
            return redirect()->route("arrendador.catalogo");
        }

        return view('arrendador.modal', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Propiedad $propiedad)
    {
        return view('formulario', compact('propiedad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Propiedad $propiedad)
    {
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

        // Actualiza los datos de la propiedad en la base de datos
        $propiedad->update($propiedadValidada);

        // Actualiza las imágenes de la propiedad
        if ($request->hasFile('images')) {
            $propiedadId = $propiedad->id;
            $imagePath = 'public/propiedades/' . $propiedadId;

            // Elimina las imágenes antiguas
            if (Storage::exists($imagePath)) {
                Storage::deleteDirectory($imagePath);
            }

            $contador = 1; // Inicializa un contador para el nombre de la imagen

            foreach ($request->file('images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $nombreDoc = 'imagen' . $contador . '.' . $extension;
                $image->storeAs('public/propiedades/' . $propiedadId, $nombreDoc);
                $contador++;
            }
        }

        return redirect()->route("arrendador.catalogo");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propiedad $propiedad)
    {
        // Obtén el ID de la propiedad a eliminar
        $propiedadId = $propiedad->id;

        // Elimina las imágenes de la propiedad en el almacenamiento
        $imagePath = 'public/propiedades/' . $propiedadId;
        if (Storage::exists($imagePath)) {
            Storage::deleteDirectory($imagePath);
        }

        // Elimina la propiedad
        $propiedad->delete();

        return redirect()->route('arrendador.catalogo');
    }
}
