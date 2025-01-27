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
                        <h4>Visualizar Usuário
                            <a href="../index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                    if (isset($_GET['id'])){
                        $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                        $sql = "SELECT * FROM usuarios WHERE id ='$usuario_id'";
                        $query = mysqli_query($conexao, $sql);

                        if(mysqli_num_rows($query) > 0){
                            $usuario = mysqli_fetch_array($query);
                        ?>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nome</label>
                                <p class="form-control">
                                <?=$usuario['nome']?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                                <p class="form-control">
                                <?=$usuario['email']?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <label>Data Nascimento</label>
                                <p class="form-control">
                                <?=date('d/m/Y', strtotime($usuario['data_nascimento']))?>
                                </p>
                            </div>
                        </div>
                        <?php
                        }else{
                            echo "Usuário não encontrado";
                        }
                    }
                    ?>
                    </div>
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