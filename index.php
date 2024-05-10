<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>Hackathon</title>
  </head>
  <body>
    <h1>Cadastro</h1>

    <!--veio do bootstrap -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Livros e Autores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar cadastros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-4">    
      
  <?php
     //arquivo de conexão com o banco//
    include("config.php");
    switch(@$_REQUEST["page"]){
      case "novo":
        include("livros.php");
      break;
      case "listar":
        include("listar-usuario.php");
      break;
      case"livros":
        include("livros.php");
        break;
        case"editar":
          include("editar-livros.php");
          break;    
      default:
        print "<h1>Bem vindos!<h2><p>Aqui vamos ter uma listagem de livros.</p></h2></h1>
        <h0><p>datas de locação e devolução.</p></h0></h1>";
    }
?>
    </div>
  </div>
</div>

    <script src="js/bootstrap.bundle.min.js" ></script>   
  </body>
</html>