<php //se eu deixar sem $ o trem aparece na tela//
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'autores');
    define('BASE1', 'livros');
    define('BASE2', 'locacoes');
    
    //conectar o banco de dados//

    $conn = new MySQLi(HOST,USER,PASS,BASE,BASE1,BASE2);

    