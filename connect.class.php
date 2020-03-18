<?php
	$link = mysqli_connect("mysql.hostinger.com","u640958987_evolu","123456");
    if($link){
        mysqli_select_db($link, "u640958987_reca");
    }else{
        echo "Erro ao conectar ao banco de dados!!!";
    }

?>