<?php

  error_reporting(0);
/*CONEXÃO COM O BANCO DE DADOS*/ 
  $connect = mysqli_connect("localhost", "root", "") OR DIE("Falha ao conectar ao servidor");

/*Selecionando o banco de dados que será usado*/
  $db = mysqli_select_db($connect, "robotica")  OR DIE("Falha ao selecionar a database");

?>