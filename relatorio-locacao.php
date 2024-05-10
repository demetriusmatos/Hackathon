<?php

//composer
require './vendor/autoload.php';

include_once ' ./conexao.php';

$query_usuarios = "SELECT id, autor_id, nome, data_lancamento";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

while($row_usuario = $result_usuarios->fetch(PDO::FECTH_ASSOC)){
    var_dump($row_usuario);
}
