<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller

{
    
    public function index()
    {
        if (!session()->has('cliente_id')) {
        return redirect()->route('login');}
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('categorias.create');
    }

    public function store(Request $request)
{
    if (!session()->has('cliente_id')) {
        return redirect()->route('login');
    }

    $request->validate([
        'nome' => 'required|max:255'
    ]);

    Categoria::create([
        'nome' => $request->nome
    ]);

    return redirect()->route('categorias.index');
}

    public function show(Categoria $categoria)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
{
    if (!session()->has('cliente_id')) {
        return redirect()->route('login');
    }

    $request->validate([
        'nome' => 'required|max:255'
    ]);

    $categoria->update([
        'nome' => $request->nome
    ]);

    return redirect()->route('categorias.index');
}

    public function destroy(Categoria $categoria)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
