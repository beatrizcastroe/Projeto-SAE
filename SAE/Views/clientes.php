<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Clientes</title>
</head>

<?php

$pesquisa = $_POST['busca'] ?? '';
include "../Models/conexao.php";
$sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";
$dados = mysqli_query($conn, $sql);

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col md-5">
                <h3 class="m-4 text-center">Lista de Clientes</h3>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="../index.php">SAE</a>
                    <form class="form-inline" action="clientes.php" method="POST">
                        <a class="btn btn-outline-info my-2 my-sm-0 mr-2" href="cadastrocliente.php">Criar</a>
                        <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Buscar</button>

                    </form>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">RG</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($linha =  mysqli_fetch_assoc($dados)) {
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $cpf = $linha['cpf'];
                            $dataNasc = $linha['dataNasc'];
                            $rg = $linha['rg'];

                            echo "<tr>
                                    <th scope='row'>$id</th>
                                    <td>$nome</td>
                                    <td>$cpf</td>
                                    <td>$dataNasc</td>
                                    <td>$rg</td>
                                    <td><a href='enderecos.php?id=$id' class='btn btn-info btn-sm'>Endereços</a>
                                    <a href='../Controller/cadastroCliente_edit.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                                    <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                              onclick=" . '"' . "pegar_dados($id, '$nome')" . '"' . ">Excluir</a>        
                                    </td>
                                </tr>";
                        }

                        ?>

                    </tbody>
                </table>

                <a class="btn btn-outline-danger my-2 my-sm-0" href="../index.php">Sair</a>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <?php include "../Models/funcoes.php";?>
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Models/clientedelete_script.php" method="POST">
                    <p>Deseja realmente excluir <b id="nome_pessoa">Nome do pessoa</b>? Essa ação é irreversível.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="hidden" name="nome" id="nome_pessoa" value="">
                    <input type="hidden" name="id" id="cod_pessoa" value="">
                    <input type="submit" class="btn btn-danger" value="Excluir">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>