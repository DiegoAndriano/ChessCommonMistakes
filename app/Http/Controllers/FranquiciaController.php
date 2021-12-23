<?php

namespace App\Http\Controllers;

use App\Models\Franquicia;

class FranquiciaController extends Controller
{
    public function index()
    {
        return view('franquicia.index');
    }

    public function store()
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $attrs = request()->validate([
            'barrio' => 'required',
            'provincia' => 'required',
            'pais' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
        ]);

        Franquicia::create($attrs);

        return redirect(route('franquicia.index'));
    }

    public function update(Franquicia $franquicia)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $attrs = request()->validate([
            'barrio' => 'required',
            'provincia' => 'required',
            'pais' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
        ]);

        $franquicia->update($attrs);

        return redirect(route('franquicia.index'));
    }

    public function destroy(Franquicia $franquicia)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $franquicia->delete();

        return redirect(route('franquicia.index'));
    }
}
