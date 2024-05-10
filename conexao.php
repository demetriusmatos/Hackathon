<?php
    //inicio da conexao com bd 
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $dbname = "livros";
    $port = 3306;

    try {
        //conexao com a porta
        $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

        //conexao sem a porta
        //$conn = new PDO("mysql:host=$host;dbname=" . $dbname,$user,$pass);
        //echo "conexao bem sucedida";
    } catch (PDOException $err) {
        echo "Erro: Conexão mal sucessida" . $err->getMessage();
    }

    //fim do teste