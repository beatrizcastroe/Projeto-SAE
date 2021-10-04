<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <title>Cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col md-5">
        <h3 class="m-4">Login</h3>
        <form action="../Controller/validacaoLogin.php" method="POST" id="login">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
          </div>
          <div class="form-group">
            <input type="submit" class=" btn btn-success" href="">
            <a href="../index.php" class="btn btn-info">Voltar</a>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../assets/node_modules/jquery/dist/jquery.js"></script>
  <script src="../assets/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="../assets/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
  <script src="../assets/js/validacoes.js"></script>
</body>

</html>