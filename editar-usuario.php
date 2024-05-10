<h1> Editar Usuário </h1>

<?php
    $Mysql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($Mysql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; //importante pare editar ?>"> 
    <div class="mb-03"> 
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-03"> 
        <label>E-mail</label>
        <input type="email" name="email"  value="<?php print $row->email; ?>" class="form-control">
    </div>

    <div class="mb-03"> 
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>

    <div class="mb-03"> 
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc"  value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>

    <div class="mb-03"> 
        <button type="submit" class="btn btn-primary"> Enviar </button>
    </div>
</form>