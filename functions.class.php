<?php
	include("connect.class.php");

	// NEW DATA
	$nome = $_POST['nome_alunos'];
	$data = $_POST['data_alunos'];
	$tel1 = $_POST['tel1_alunos'];
	$tel2 = $_POST['tel2_alunos'];
	$tel3 = $_POST['tel3_alunos'];
	$end = $_POST['end_alunos'];
	$bairro = $_POST['bairro_alunos'];
	$cidade = $_POST['cidade_alunos'];
	$estado = $_POST['estado_alunos'];
	$btn = $_POST['btn_new_data'];

	if(isset($btn)){
		$insert_aluno = mysqli_query($link, "INSERT INTO alunos(nome_alunos,data_alunos,tel1_alunos,tel2_alunos,tel3_alunos,end_alunos,bairro_alunos,cidade_alunos,estado_alunos)VALUES('$nome','$data','$tel1','$tel2','$tel3','$end','$bairro','$cidade','$estado')");
		if($insert_aluno){
			header("location:ok-cadastro.php");
		}
	}

	// GET DATA
	$get_alunos = mysqli_query($link, "SELECT * FROM alunos ORDER BY id_alunos DESC");
	$id_aluno_url = $_GET['id_aluno'];
	$get_alunos2 = mysqli_query($link, "SELECT * FROM alunos WHERE id_alunos = '$id_aluno_url'");

	

	$list_alunos_info = mysqli_fetch_array($get_alunos2);
?>