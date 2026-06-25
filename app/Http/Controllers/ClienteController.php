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
            return redirect()->route('login');
        }

        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('clientes.create');
    }

    public function store(Request $request)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

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
            'senha' => Hash::make($request->senha)
        ]);

        return redirect()->route('clientes.index');
    }

    public function edit(Cliente $cliente)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        $data = $request->all();

        if ($request->filled('senha')) {
            $data['senha'] = Hash::make($request->senha);
        } else {
            unset($data['senha']);
        }

        $cliente->update($data);

        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
