<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Loja de Instrumentos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black flex items-center justify-center">

<div class="w-full max-w-md bg-gray-900 border border-orange-500 rounded-2xl shadow-2xl p-8">

    <h1 class="text-4xl font-bold text-orange-500 text-center mb-2">
         Music Store
    </h1>

    <p class="text-center text-gray-400 mb-8">
        Loja de Instrumentos
    </p>

    @if(session('erro'))
        <div class="bg-red-500 text-white p-3 rounded mb-4">
            {{ session('erro') }}
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">

        @csrf

        <input
            type="email"
            name="email"
            placeholder="Email"
            class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg mb-4"
        >

        <input
            type="password"
            name="senha"
            placeholder="Senha"
            class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg mb-6"
        >

        <button
            type="submit"
            class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded-lg"
        >
            Entrar
        </button>

    </form>

</div>

</body>
</html>