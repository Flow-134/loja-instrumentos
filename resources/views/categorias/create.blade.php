<h1>Nova Categoria</h1>

<form action="{{ route('categorias.store') }}" method="POST">
    @csrf

    <input type="text" name="nome" placeholder="Nome da categoria">

    <button type="submit">
        Salvar
    </button>
</form>