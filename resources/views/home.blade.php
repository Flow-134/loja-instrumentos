<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja de Instrumentos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black flex items-center justify-center">

<div class="w-full max-w-5xl p-10">

    <h1 class="text-5xl font-bold text-center text-orange-500 mb-3">
        🎸 Music Store
    </h1>

    <p class="text-center text-gray-300 mb-12">
        Sistema de Gerenciamento da Loja de Instrumentos
    </p>

    <div class="grid md:grid-cols-3 gap-8">

        <!-- Clientes -->
        <a href="{{ route('clientes.index') }}"
           class="bg-gray-900 border border-orange-500 rounded-2xl p-8 hover:scale-105 transition">

            <div class="text-6xl text-center mb-4">
                👤
            </div>

            <h2 class="text-2xl text-orange-500 text-center font-bold">
                Clientes
            </h2>

            <p class="text-gray-400 text-center mt-3">
                Gerenciar clientes cadastrados
            </p>

        </a>

        <!-- Categorias -->
        <a href="{{ route('categorias.index') }}"
           class="bg-gray-900 border border-orange-500 rounded-2xl p-8 hover:scale-105 transition">

            <div class="text-6xl text-center mb-4">
                🏷️
            </div>

            <h2 class="text-2xl text-orange-500 text-center font-bold">
                Categorias
            </h2>

            <p class="text-gray-400 text-center mt-3">
                Gerenciar categorias
            </p>

        </a>

        <!-- Instrumentos -->
        <a href="{{ route('instrumentos.index') }}"
           class="bg-gray-900 border border-orange-500 rounded-2xl p-8 hover:scale-105 transition">

            <div class="text-6xl text-center mb-4">
                🎸
            </div>

            <h2 class="text-2xl text-orange-500 text-center font-bold">
                Instrumentos
            </h2>

            <p class="text-gray-400 text-center mt-3">
                Gerenciar instrumentos
            </p>

        </a>

    </div>

    <div class="text-center mt-12">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button
                class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold"
            >
                Sair
            </button>
        </form>

    </div>

</div>

</body>
</html>