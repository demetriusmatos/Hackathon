<h1> Listar Usuários </h1>
<php 
	$Mysql = "SELECT * FROM livros";
	$res = $conn->query($Mysql);
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<table class='table table-hover table-striped table-bordered'>";
		 print "<tr>";
		 print "<th>#</tr>";
		 print "<th>Nome</th>";
		 print "<th>E-mail</th>";
		 print "<th>Data de lançamento</th>";
		 print "<th>Ações</th>";
		 print "</tr>";
		while($row = $res->fetch_object()){
		 print "<tr>";
		 print "<td>".$row->id."</td>";
		 print "<td>".$row->nome."</td>";
		 print "<td>".$row->email."</td>";
		 print "<td>".$row->data_nasc."</td>";
         print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-sucess'> Editar </button>
                <button onclick=\"if(confirm('Tem certeza que seseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-sucess'> Excluir </button>
               </td>";
		 print "</tr>";
		}
		print "</table>";
   
}else {
	    print "<p class='aleret alert-danger'>Não encontrou resultado!</p>";
}
?>