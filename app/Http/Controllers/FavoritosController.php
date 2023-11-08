<?php

namespace App\Http\Controllers;

use App\Models\Favoritos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $favorito = Favoritos::with('propiedads')->where('user_id', $user_id)->get();
        return view('favoritos',compact('favorito'));
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
        $favorito = new Favoritos();
        $favorito->propiedads_id = $request->propiedads_id;
        $favorito->user_id = $request->user_id;
        $favorito->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Favoritos $favoritos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favoritos $favoritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favoritos $favoritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favoritos $favoritos)
    {
        //
    }
}
