<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Instrumentos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black p-8">

<div class="max-w-7xl mx-auto">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-4xl font-bold text-orange-500">
            🎸 Instrumentos
        </h1>

        <a
            href="{{ route('instrumentos.create') }}"
            class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-bold"
        >
            + Novo Instrumento
        </a>

    </div>

    <div class="bg-gray-900 border border-orange-500 rounded-2xl shadow-2xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-orange-500 text-white">

                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Nome</th>
                    <th class="p-4 text-left">Marca</th>
                    <th class="p-4 text-left">Preço</th>
                    <th class="p-4 text-left">Categoria</th>
                    <th class="p-4 text-left">Ações</th>
                </tr>

            </thead>

            <tbody>

                @foreach($instrumentos as $instrumento)

                <tr class="border-b border-gray-700 hover:bg-gray-800 text-white">

                    <td class="p-4">
                        {{ $instrumento->id }}
                    </td>

                    <td class="p-4">
                        {{ $instrumento->nome }}
                    </td>

                    <td class="p-4">
                        {{ $instrumento->marca }}
                    </td>

                    <td class="p-4">
                        R$ {{ number_format($instrumento->preco,2,',','.') }}
                    </td>

                    <td class="p-4">
                        {{ $instrumento->categoria->nome }}
                    </td>

                    <td class="p-4 flex gap-2">

                        <a
                            href="{{ route('instrumentos.edit',$instrumento->id) }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded"
                        >
                            Editar
                        </a>

                        <form
                            action="{{ route('instrumentos.destroy',$instrumento->id) }}"
                            method="POST"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded"
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