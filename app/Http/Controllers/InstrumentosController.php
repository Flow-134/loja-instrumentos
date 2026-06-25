<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Instrumentos;
use Illuminate\Http\Request;

class InstrumentosController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session()->has('cliente_id')) {
        return redirect()->route('login');}
        $instrumentos = Instrumentos::with('categoria')->get();

        return view('instrumentos.index', compact('instrumentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        $categorias = Categoria::all();
        return view('instrumentos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        Instrumentos::create([
            'nome' => $request->nome,
            'marca' => $request->marca,
            'preco' => $request->preco,
            'categoria_id' => $request->categoria_id,
        ]);
        return redirect()->route('instrumentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instrumentos $instrumentos)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('instrumentos.show', compact('instrumentos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrumentos $instrumento)
{
    if (!session()->has('cliente_id')) {
        return redirect()->route('login');
    }

    $categorias = Categoria::all();

    return view(
        'instrumentos.edit',
        compact('instrumento', 'categorias')
    );
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instrumentos $instrumento)
{
    if (!session()->has('cliente_id')) {
        return redirect()->route('login');
    }

    $instrumento->update([
        'nome' => $request->nome,
        'marca' => $request->marca,
        'preco' => $request->preco,
        'categoria_id' => $request->categoria_id,
    ]);

    return redirect()->route('instrumentos.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instrumentos $instrumento)
{
    if (!session()->has('cliente_id')) {
        return redirect()->route('login');
    }

    $instrumento->delete();

    return redirect()->route('instrumentos.index');
}
}
