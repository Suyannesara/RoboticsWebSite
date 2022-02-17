<?php

/*Incluindo o arquivo que gera conexão com as informações do form para o BD*/ 
include_once("connection.php");

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$wppnumber = filter_input(INPUT_POST, 'wppnumber', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$vaga = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_EMAIL);
$dataNascimento = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_EMAIL);
$turma = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_EMAIL);
$disponibilidade = filter_input(INPUT_POST, 'disponibility', FILTER_SANITIZE_EMAIL);
$informaçõesAdicionais = filter_input(INPUT_POST, 'InfoAdd', FILTER_SANITIZE_EMAIL);
$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_EMAIL);

/*INSERINDO NO BD*/
$result_inscritos = "INSERT INTO inscritos (Nome, WppNumber, Email, Vaga, dtNascimento, Turma, Disponibilidade, InfoAdd, Video, created) 
VALUES ('$nome', '$wppnumber', '$email', '$vaga', '$dataNascimento', '$turma', '$disponibilidade', '$informaçõesAdicionais', '$video', NOW())
";

$resultado_inscritos = mysqli_query($conn, $result_inscritos);

if (mysqli_insert_id($conn)){
  header("Location: ./subscriptiondone.html");
}else{
  header("Location: ./form.html");
}

/*
echo "Nome: $nome  <br>";
echo "Número de Whatssapp: $wppnumber <br>";
echo "E-mail: $email <br>";
echo "Tipo de vaga: $vaga <br>";
echo "Data de nascimento: $dataNascimento <br>";
echo "Turma: $turma <br>";
echo "Disponibilidade: $disponibilidade <br>";
echo "Informações adicionais : $informaçõesAdicionais <br>";
echo "Vídeo: $video <br>";
*/

