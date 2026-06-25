<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller

{
    public function index()
    {
        if (!session()->has('cliente_id')) {
        return redirect()->route('login'); }
        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'telefone' => 'required',
        'senha' => 'required'
    ]);

    Cliente::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'telefone' => $request->telefone,
        'senha' => bcrypt($request->senha)
    ]);

    return redirect()->route('clientes.index');
}
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
