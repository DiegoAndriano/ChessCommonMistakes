<?php

namespace App\Http\Controllers;

use App\Models\Corredor;
use App\Models\Franquicia;

class CorredorController extends Controller
{
    public function index()
    {
        return view('corredores.index');
    }

    public function store()
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $attrs = request()->validate([
            'franquicia_id' => 'nullable|exists:franquicias,id',
            'nombre' => 'required|string',
            'email' => 'required|email',
            'cpi' => 'nullable|numeric',
            'cmcpsi' => 'nullable|numeric',
        ]);

        $corredor = Corredor::create([
            'nombre' => $attrs['nombre'],
            'email' => $attrs['email'],
            'cpi' => $attrs['cpi'],
            'cmcpsi' => $attrs['cmcpsi'],
        ]);

        $frq = Franquicia::whereId($attrs['franquicia_id'])->first();

        if ($frq !== null) {
            $corredor->franquicia()->associate($frq);
            $corredor->save();
        }

        return redirect('corredores.index');
    }

    public function create()
    {
        abort_if(! auth()->user()->isAdmin, 403);

        return view('corredores.create');
    }

    public function update(Corredor $corredor)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $attrs = request()->validate([
            'franquicia_id' => 'nullable|exists:franquicias,id',
            'nombre' => 'required|string',
            'email' => 'required|email',
            'cpi' => 'nullable|numeric',
            'cmcpsi' => 'nullable|numeric',
        ]);

        $corredor->update([
            'nombre' => $attrs['nombre'],
            'email' => $attrs['email'],
            'cpi' => $attrs['cpi'],
            'cmcpsi' => $attrs['cmcpsi'],
        ]);

        $frq = Franquicia::whereId($attrs['franquicia_id'])->first();
        if ($frq !== null) {
            $corredor->franquicia()->associate($frq);
            $corredor->save();
        }

        return redirect('corredores.index');
    }

    public function edit(Corredor $corredor)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        return view('corredores.edit', compact($corredor));
    }

    public function destroy(Corredor $corredor)
    {
        abort_if(! auth()->user()->isAdmin, 403);

        $corredor->delete();

        return redirect('corredores.index');
    }
}
