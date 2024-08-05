<?php require '../conexao/conexao.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Usuarios</title>
</head>

<body>
  <?php include('../layouts/navbar.php') ?>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Adicionar Usuário
              <a href="../index.php" class="btn btn-danger float-end">Voltar</a>
            </h4>
          </div>
          <form action="../acoes/usuario.php" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control">
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Data Nascimento</label>
                  <input type="date" name="data_nascimento" class="form-control">
                </div>
                <div class="col-md-6">
                  <label>Senha</label>
                  <input type="password" name="senha" class="form-control">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="md-3">
                <button type="submit" name="create_usuario" class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>