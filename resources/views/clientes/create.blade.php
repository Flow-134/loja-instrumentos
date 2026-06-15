<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black flex items-center justify-center p-6">

    <div class="w-full max-w-lg bg-gray-900 border border-orange-500 rounded-2xl shadow-2xl p-8">

        <h1 class="text-4xl font-bold text-orange-500 text-center mb-8">
             Cadastro de Clientes
        </h1>

        <form action="{{ route('clientes.store') }}" method="POST" class="space-y-4">

    @csrf

    <input
        type="text"
        name="nome"
        placeholder="Nome"
        class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
    />

    <input
        type="email"
        name="email"
        placeholder="Email"
        class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
    />

    <input
        type="text"
        name="telefone"
        placeholder="Telefone"
        class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
    />

    <div class="flex justify-between pt-4">

        <a
            href="{{ route('clientes.index') }}"
            class="bg-gray-700 hover:bg-gray-800 text-white font-bold px-6 py-3 rounded-lg"
        >
            ← Voltar
        </a>

        <button
            type="submit"
            class="bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-lg"
        >
            Salvar
        </button>

    </div>

</form>

    </div>

</body>
</html>
