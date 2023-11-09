<?php

namespace App\Http\Controllers;

use App\Models\Favoritos;
use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        // Obtén todas las propiedades que no están marcadas como eliminadas
        $propiedades = Propiedad::where('edoPropiedad', '!=', 'eliminada')->get();

        // Inicializa un array para almacenar los favoritos por propiedad
        $favoritosPorPropiedad = [];

        // Itera a través de las propiedades para comprobar si son favoritas
        foreach ($propiedades as $propiedad) {
            $favorito = Favoritos::where('user_id', $user_id)
                ->where('propiedads_id', $propiedad->id)
                ->first();

            // Almacena el resultado en el array asociativo
            $favoritosPorPropiedad[$propiedad->id] = $favorito;
        }

        return view('index', compact('favoritosPorPropiedad', 'propiedades'));
    }


    public function catalogo(Request $request){

    $estadoSeleccionado = $request->input('estado');
    
    $query = Propiedad::query();

    if ($estadoSeleccionado && $estadoSeleccionado !== 'Selecciona un estado') {
        $query->where('edoPropiedad', $estadoSeleccionado);
    } else {
        $query->where('edoPropiedad', '!=', 'eliminada');
    }

    $propiedades = $query->paginate(7);
    $estados = Propiedad::distinct()->pluck('edoPropiedad');

    return view('arrendador.catalogo', compact('propiedades', 'estados'));
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
                $extension = 'jpg';
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
    public function show($propiedad)
    {
        $propiedad = Propiedad::find($propiedad); // Obtiene la propiedad por su ID
        
        $readonlyInput = true;

        if (!$propiedad) {
            // Si la propiedad no existe, puedes manejarlo de acuerdo a tus necesidades, por ejemplo, redirigir o mostrar un error.
            return redirect()->route("arrendador.catalogo");
        }

        return view('arrendador.modal', compact('propiedad','readonlyInput'));
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

    public function cambiar($propiedad)
    {
        $propiedad = Propiedad::find($propiedad);

        if ($propiedad->edoPropiedad == "publicada") {

            $propiedadValidada = ([
                'edoPropiedad' => "rentada"
            ]);

            $propiedad->update($propiedadValidada);

            return redirect()->back();
        } else {

            $propiedadValidada = ([
                'edoPropiedad' => "publicada"
            ]);

            $propiedad->update($propiedadValidada);

            return redirect()->back();
        }
    }

    public function eliminada($propiedad)
    {
        $propiedad = Propiedad::find($propiedad);

        $propiedadValidada = ([
            'edoPropiedad' => "eliminada"
        ]);

        $propiedad->update($propiedadValidada);

        return redirect()->back();
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
