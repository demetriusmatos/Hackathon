<h1> Editar Livros </h1>

<?php
    $Mysql = "SELECT * FROM livros WHERE id=".$_REQUEST["id"];
    $res = $conn->query($Mysql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; //importante para editar ?>"> 
    <div class="mb-03"> 
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-03"> 
        <label>autor_id</label>
        <input type="text" name="Nome do Autor"  value="<?php print $row->autor_id; ?>" class="form-control">
    </div>

    <div class="mb-03"> 
        <label>ID</label>
        <input type="password" name="ID" class="form-control" required>
    </div>

    <div class="mb-03"> 
        <label>data_lancamento</label>
        <input type="date" name="data_lancamento"  value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>

    <div class="mb-03"> 
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>
</form>