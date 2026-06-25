<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black p-8">

    <div class="max-w-5xl mx-auto">

        <!-- Cabeçalho -->
        <div class="flex justify-between items-center mb-8">

            <h1 class="text-4xl font-bold text-orange-500">
                🎵 Categorias
            </h1>

            <a
                href="{{ route('categorias.create') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-lg shadow-lg transition duration-300"
            >
                + Nova Categoria
            </a>

        </div>

        <!-- Tabela -->
        <div class="bg-gray-900 border border-orange-500 rounded-2xl shadow-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-orange-500 text-white">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Nome</th>
                        <th class="p-4 text-left">Ações</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($categorias as $categoria)

                    <tr class="border-b border-gray-700 hover:bg-gray-800 text-white">

                        <td class="p-4">
                            {{ $categoria->id }}
                        </td>

                        <td class="p-4">
                            {{ $categoria->nome }}
                        </td>

                        <td class="p-4 flex gap-2">

                            <a
                                href="{{ route('categorias.edit', $categoria->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded"
                            >
                                Editar
                            </a>

                            <form
                                action="{{ route('categorias.destroy', $categoria->id) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded"
                                    onclick="return confirm('Deseja excluir esta categoria?')"
                                >
                                    Excluir
                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>