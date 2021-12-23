<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropiedadRequest;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    public function index()
    {
        return view('propiedad.index');
    }

    public function store(PropiedadRequest $attrs)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $attrs = $attrs->validated();

        Propiedad ::create($attrs);

        return redirect(route('propiedad.index'));
    }

    public function update(PropiedadRequest $attrs, Propiedad $propiedad)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $propiedad->update($attrs->validated());

        return redirect(route('propiedad.index'));
    }

    public function create()
    {
        abort_if(! auth()->user()->isAdmin, 403);

        return view('propiedad.create');
    }

    public function edit(Propiedad $propiedad)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        return view('propiedad.edit', compact($propiedad));
    }

    public function destroy(Propiedad $propiedad)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $propiedad->delete();

        return redirect(route('propiedad.index'));
    }
}
