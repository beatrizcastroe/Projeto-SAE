<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Alteração de Endereços dos Clientes</title>
  </head>
  <body>

  <?php
  include "../Models/conexao.php";
  $id = $_GET['id'] ?? '';
  $sql = "SELECT * FROM enderecos WHERE id = $id";

  $dados = mysqli_query($conn, $sql);
  $linha = mysqli_fetch_assoc($dados);

  ?>

      <div class="container">
        <div class="row">
            <div class="col md-5">
                <h3 class="m-4">Alteração de Endereços dos Clientes</h3>
                <form action="../Models/cadastroendedit_script.php" method="POST">

                <div class="form-group">
                    <label for="nome">Endereço</label>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                </div>

                <div class="form-group">
                    <label for="cpf">Numero</label>
                    <input type="text"  class="form-control" name="numero" value="<?php echo $linha['numero']; ?>">
                </div>

                <div class="form-group">
                    <label for="dataNasc">Complemento</label>
                    <input type="text"  class="form-control" name="comp" value="<?php echo $linha['comp']; ?>">
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text"  class="form-control" name="bairro" value="<?php echo $linha['bairro']; ?>">
                </div>

                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text"  class="form-control" name="cep" value="<?php echo $linha['cep']; ?>">
                </div>

                <div class="form-group">
                    <label for="Cidade">Cidade</label>
                    <input type="text"  class="form-control" name="cidade" value="<?php echo $linha['cidade']; ?>">
                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text"  class="form-control" name="estado" value="<?php echo $linha['estado']; ?>">
                </div>

                

                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                
                </form>

                <a href="../Views/clientes.php" class="btn btn-info">Voltar</a>

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