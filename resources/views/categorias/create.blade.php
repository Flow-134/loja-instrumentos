<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Categoria</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center">

    <div class="bg-black p-8 rounded-xl shadow-lg w-full max-w-md border border-orange-500" >

        <h1 class="text-2xl font-bold text-center mb-6 text-orange-500">
            Nova Categoria
        </h1>

        <form action="{{ route('categorias.store') }}" method="POST" class="space-y-4">

            @csrf

            <input
                type="text"
                name="nome"
                placeholder="Nome da categoria"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                required
            >

            <div class="flex justify-between">

                <a
                    href="{{ route('categorias.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg transition"
                >
                    ← Voltar
                </a>

                <button
                    type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg transition"
                >
                    Salvar
                </button>

            </div>

        </form>

    </div>

</body>
</html>