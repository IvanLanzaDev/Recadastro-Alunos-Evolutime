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
    <div class="container mt-5">
      <h4 class="text-center">Relatório Alunos</h4>
      <small><p class="text-info text-center">Clique no botão para ver informações sobre o aluno</p></small>

      <div class="container-form table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Aluno</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

            <?php
              while($list_alunos = mysqli_fetch_array($get_alunos)){
                echo "
                  <tr>
                    <th scope='row'>$list_alunos[nome_alunos]</th>
                    <td><a href='aluno.php?id_aluno=$list_alunos[id_alunos]' class='btn btn-primary btn-sm'>Ver dados</a></td>
                  </tr>
                  ";
              }
            ?>
            
          </tbody>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>