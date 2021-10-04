<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Enderecos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col md-5">
                <h3 class="m-4 text-center">Lista dos Endereços dos Clientes</h3>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="../index.php">SAE</a>
                    <form class="form-inline" action="clientes.php" method="POST">
                        <a class="btn btn-outline-primary my-2 my-sm-0 m-1" href="clientes.php">Clientes</a>
                        <a class="btn btn-outline-info my-2 my-sm-0 mr-2" href="cadastroend.php">Novo Endereço</a>
                        

                    </form>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Número</th>
                            <th scope="col">Complemento</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ações</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        include "../Models/conexao.php";
                        include "../Models/funcoes.php";
                        $idcliente = getIdFromUrl();
                        $sql = "SELECT * FROM enderecos WHERE idCliente LIKE '%$idcliente%'";
                        $dados = mysqli_query($conn, $sql);

                        while ($linha =  mysqli_fetch_assoc($dados)) {
                            $id = $linha['id'];
                            $endereco = $linha['endereco'];
                            $numero = $linha['numero'];
                            $comp = $linha['comp'];
                            $bairro = $linha['bairro'];
                            $cep = $linha['cep'];
                            $cidade = $linha['cidade'];
                            $estado = $linha['estado'];
                            

                            echo "<tr>
                                    <th scope='row'>$id</th>
                                    <td>$endereco</td>
                                    <td>$numero</td>
                                    <td>$comp</td>
                                    <td>$bairro</td>
                                    <td>$cep</td>
                                    <td>$cidade</td>
                                    <td>$estado</td>
                                    
                                    <td><a href='../Controller/cadastroEnd_edit.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                                    <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                              onclick=" . '"' . "pegar_dadosEnd($id, '$endereco')" . '"' . ">Excluir</a>
                                    </td>
                              </tr>";
                        }

                        ?>

                    </tbody>
                </table>

                <a class="btn btn-outline-danger my-2 my-sm-0" href="clientes.php">Voltar</a>

            </div>
        </div>
    </div>

    <!-- Modal -->
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
                    <form action="../Models/enderecodelete_script.php" method="POST">
                    <p>Deseja realmente excluir: <b id="nome_endereco">Endereco</b>? Essa ação é irreversível.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="hidden" name="endereco" id="nome_endereco" value="">
                    <input type="hidden" name="id" id="cod_endereco" value="">
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