<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');
    
    //conectar o banco de dados//

    $conn = new MySQLi(HOST, USER, PASS, BASE);
    