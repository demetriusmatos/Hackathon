    <?php
        switch ($_REQUEST["acao"]) {
            case 'cadastrar':

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = md5($_POST["senha"]); //md5 criptografa a senha
                $data_nasc = $_POST["data_nasc"];

                // tenho que ter uma conexão válida com o banco de dados
                // $conn seja sua conexão válida
                $Mysqli = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
                        VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

                $res = $conn->query($Mysqli);

                if ($res) {
                    echo "Usuário cadastrado com sucesso.";
                } else {
                    echo "Erro ao cadastrar usuário: " . $conn->error;
                }

                break;

                $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $nome, $email, $senha, $data_nasc);
                $stmt->execute();


            case 'editar': //final do video 40 min em diante                
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = md5($_POST["senha"]); //md5 criptografa a senha
                $data_nasc = $_POST["data_nasc"];

                $Mysqli = "UPDATE usuarios SET
                            nome='{$nome}',
                            email='{$email}',
                            senha='{$senha}',
                            data_nasc='{$data_nasc}'
                            WHERE
                                id=".$_REQUEST["ID"];

                $res = $conn->query($Mysqli);

                if ($res) {
                    echo "Usuário editado com sucesso.";
                } else {
                    echo "Erro ao editar usuário: " . $conn->error;
                }

                break;

            case 'excluir':
                // código de exclusão

                $Mysqli = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

                $res = $conn->query($Mysqli);

                if ($res) {
                    echo "Usuário excluído com sucesso.";
                } else {
                    echo "Erro ao excluir usuário: " . $conn->error;
                }

                break;
        }
    ?>
