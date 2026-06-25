<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black min-h-screen p-8">

    <div class="max-w-6xl mx-auto">

        <div class="flex justify-between items-center mb-6">

            <div class="flex items-center gap-4">
                <a
                    href="{{ route('home') }}"
                    class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded-lg transition"
                >
                    ← Voltar ao Início
                </a>

                <h1 class="text-4xl font-bold text-orange-500">
                 Clientes
                </h1>
            </div>

            <a
                href="{{ route('clientes.create') }}"
                class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-bold shadow-lg transition duration-300"
            >
                + Novo Cliente
            </a>

        </div>

        <!-- Tabela -->
        <div class="overflow-hidden rounded-xl shadow-2xl">

            <table class="w-full bg-gray-900">

                <thead class="bg-orange-500 text-white">
                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Nome</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Telefone</th>
                        <th class="p-4 text-left">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($clientes as $cliente)

                    <tr class="border-b border-gray-700 hover:bg-gray-800 text-white transition">

                        <td class="p-4">{{ $cliente->id }}</td>

                        <td class="p-4">{{ $cliente->nome }}</td>

                        <td class="p-4">{{ $cliente->email }}</td>

                        <td class="p-4">{{ $cliente->telefone }}</td>

                        <td class="p-4 flex gap-2">

                            <a
                                href="{{ route('clientes.edit', $cliente->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded"
                            >
                                Editar
                            </a>

                            <form
                                action="{{ route('clientes.destroy', $cliente->id) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded"
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