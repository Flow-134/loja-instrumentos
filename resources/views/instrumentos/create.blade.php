<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Instrumento</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black flex items-center justify-center p-6">

<div class="w-full max-w-lg bg-gray-900 border border-orange-500 rounded-2xl shadow-2xl p-8">

    <h1 class="text-4xl font-bold text-orange-500 text-center mb-8">
    Novo Instrumento
    </h1>

    <form action="{{ route('instrumentos.store') }}" method="POST" class="space-y-4">

        @csrf

        <input
            type="text"
            name="nome"
            placeholder="Nome do instrumento"
            class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg"
        >

        <input
            type="text"
            name="marca"
            placeholder="Marca"
            class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg"
        >

        <input
            type="number"
            step="0.01"
            name="preco"
            placeholder="Preço"
            class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg"
        >

        <select
            name="categoria_id"
            class="w-full bg-black border border-orange-500 text-white px-4 py-3 rounded-lg"
        >

            @foreach($categorias as $categoria)

                <option value="{{ $categoria->id }}">
                    {{ $categoria->nome }}
                </option>

            @endforeach

        </select>

        <div class="flex justify-between">

            <a
                href="{{ route('instrumentos.index') }}"
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