<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  

    <title>Recadastramento Evolutime</title>
  </head>
  <body class="bg-light">
    <div class="container mt-5 col-md-6">
      <h4 class="text-center">Dados do Aluno</h4>
      <hr>

      <div class="container-form">

        <p><strong>Nome Completo:</strong> <?php echo $list_alunos_info[nome_alunos]; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $list_alunos_info[data_alunos]; ?></p>
        <p><strong>Telefones:</strong> <br><?php echo $list_alunos_info[tel1_alunos];?> <br><?php echo $list_alunos_info[tel2_alunos]; ?><br><?php echo $list_alunos_info[tel3_alunos]; ?></p>
        <p><strong>Endereço:</strong> <?php echo $list_alunos_info[end_alunos]; ?></p>
        <p><strong>Bairro:</strong> <?php echo $list_alunos_info[bairro_alunos]; ?></p>
        <p><strong>Cidade:</strong> <?php echo $list_alunos_info[cidade_alunos]; ?></p>
        <p><strong>Estado:</strong> <?php echo $list_alunos_info[estado_alunos]; ?></p>

        <a href="relatorio.php" class="btn btn-primary btn-lg btn-block mt-4">Ver outros alunos</a>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>