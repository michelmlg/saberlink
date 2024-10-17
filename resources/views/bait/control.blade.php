<form action="{{ route('baits.store') }}" method="POST" enctype="multipart/form-data">
    @csrf <!-- Token de segurança para evitar CSRF -->

    <label for="nm_title">Título:</label>
    <input type="text" name="nm_title" id="nm_title" required>

    <label for="ds_bait">Descrição:</label>
    <textarea name="ds_bait" id="ds_bait" required></textarea>

    <label for="id_category">Categoria:</label>
    <select name="id_category" id="id_category">
        <!-- Opcional: loop para carregar categorias dinâmicas -->
        <option value="1">Categoria 1</option>
        <option value="2">Categoria 2</option>
    </select>

    <label for="txt_body">Texto da Isca:</label>
    <textarea name="txt_body" id="txt_body" required></textarea>

    <label for="img_path">Imagem:</label>
    <input type="file" name="img_path" id="img_path">

    <button type="submit">Criar Isca</button>
</form>

<form action="{{ route('baits.update', $bait->id) }}" method="POST" enctype="multipart/form-data">
    @csrf <!-- Token CSRF -->
    @method('PUT') <!-- Método PUT para a rota de atualização -->

    <label for="nm_title">Título:</label>
    <input type="text" name="nm_title" id="nm_title" value="{{ $bait->nm_title }}" required>

    <label for="ds_bait">Descrição:</label>
    <textarea name="ds_bait" id="ds_bait" required>{{ $bait->ds_bait }}</textarea>

    <label for="id_category">Categoria:</label>
    <select name="id_category" id="id_category">
        <!-- Loop para carregar categorias dinâmicas -->
        <option value="1" {{ $bait->id_category == 1 ? 'selected' : '' }}>Categoria 1</option>
        <option value="2" {{ $bait->id_category == 2 ? 'selected' : '' }}>Categoria 2</option>
    </select>

    <label for="txt_body">Texto da Isca:</label>
    <textarea name="txt_body" id="txt_body" required>{{ $bait->txt_body }}</textarea>

    <label for="img_path">Imagem:</label>
    <input type="file" name="img_path" id="img_path">

    <button type="submit">Atualizar Isca</button>
</form>

<form action="{{ route('baits.destroy', $bait->id) }}" method="POST">
    @csrf
    @method('DELETE') <!-- Método DELETE -->

    <button type="submit" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar Isca</button>
</form>



