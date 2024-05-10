<h1> LIVROS </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3"> 
        <label>Nome do Livros</label>
        <input type="text" name="nome do livro" class="form-control">
    </div>

    <div class="mb-3"> 
        <label>Nome do autor</label>
        <input type="text" name="autor_id" class="form-control">
    </div>

    <div class="mb-3"> 
        <label>ID do livro</label>
        <input type="text" name="ID" class="form-control">
    </div>

    <div class="mb-3"> 
        <label>Data Lançamento</label>
        <input type="date" name="data_lancamento" class="form-control">
    </div>

    <div class="mb-3"> 
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>
</form>