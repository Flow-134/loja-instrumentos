<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $cliente = Cliente::where('email', $request->email)->first();

        if (!$cliente) {
            return back()->with('erro', 'Email não encontrado');
        }

        if (!Hash::check($request->senha, $cliente->senha)) {
            return back()->with('erro', 'Senha incorreta');
        }

        session([
            'cliente_id' => $cliente->id,
            'cliente_nome' => $cliente->nome
        ]);

        return redirect()->route('clientes.index');
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('login');
    }
}