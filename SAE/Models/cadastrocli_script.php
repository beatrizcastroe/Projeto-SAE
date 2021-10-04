<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Cadastro de clientes</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>
                Cadastro de Clientes
            </h3>

            <?php

            include "conexao.php";
            include "funcoes.php";
                     
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $dataNasc = $_POST['dataNasc'];
            $rg = $_POST['rg'];

            $sql = "INSERT INTO `clientes`(`nome`, `cpf`, `dataNasc`, `rg`) VALUES ('$nome','$cpf','$dataNasc', '$rg')";

            if (mysqli_query($conn, $sql)) {
                mensagem("$nome cadastrado com sucesso!", 'success');
            } else {
                mensagem("$nome não foi cadastrado", 'danger');
            }
            ?>

        </div>
    </div>
    <hr>
    <a href="../Views/clientes.php" class="btn btn-primary">Voltar</a>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>