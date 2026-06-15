<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black flex items-center justify-center p-6">

    <div class="w-full max-w-lg bg-gray-900 border border-orange-500 rounded-2xl shadow-2xl p-8">

        <h1 class="text-4xl font-bold text-orange-500 text-center mb-8">
         Editar Categoria
        </h1>

        <form
            action="{{ route('categorias.update', $categoria->id) }}"
            method="POST"
            class="space-y-4"
        >

            @csrf
            @method('PUT')

            <input
                type="text"
                name="nome"
                value="{{ $categoria->nome }}"
                placeholder="Nome da Categoria"
                class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                required
            />

            <div class="flex justify-between pt-4">

                <a
                    href="{{ route('categorias.index') }}"
                    class="bg-gray-700 hover:bg-gray-800 text-white font-bold px-6 py-3 rounded-lg transition duration-300"
                >
                    ← Voltar
                </a>

                <button
                    type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-lg transition duration-300"
                >
                    Atualizar
                </button>

            </div>

        </form>

    </div>

</body>
</html>