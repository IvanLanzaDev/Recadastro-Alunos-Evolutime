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
    <div class="container  mt-5">
      <h4 class="text-center">Recadastramento Evolutime</h4>
      <small><p class="text-danger text-center">Preencha corretamente o formulário abaixo.</p></small>

      <div class="container-form col-md-6 mx-auto">
        <form method="post" action="">
          <div class="form-group">
            <label>Nome Completo</label>
            <input type="text" class="form-control" name="nome_alunos" autofocus required>
          </div>
          <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="text" class="form-control date" name="data_alunos" required>
          </div>
          <div class="form-group">
            <label>Telefones</label>
            <input type="tel" class="form-control phone" name="tel1_alunos" required>
          </div> 
          <div class="form-group">
            <input type="tel" class="form-control phone" name="tel2_alunos">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control phone" name="tel3_alunos">
          </div> 
          <div class="form-group">
            <label>Endereço</label>
            <input type="text" class="form-control" name="end_alunos" required>
          </div>
          <div class="form-group">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro_alunos" required>
          </div>
          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade_alunos" required>
          </div>
          <div class="form-group">
            <label>Estado</label>
            <input type="text" class="form-control" name="estado_alunos" required>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn-lg" name="btn_new_data" value="Finalizar">
          </div>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">
    
   $(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('(00) 00000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});

  </script>
  </body>
</html>