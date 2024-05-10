<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'autores');
    define('BASE', 'livros');
    define('BASE', 'locacoes');
    
    //conectar o banco de dados//

    $conn = new MySQLi(HOST,USER,PASS,BASE);
    