<?php

$nome = $_GET["nome"];
$comentarios = $_GET["comentarios"];
$Telefone = $_GET["Telefone"];
$email = $_GET["email"];

include ('conexao.php');
$conexao->query("INSERT INTO comentarios (nome,comentarios,Telefone,email) VALUES ('$nome','$comentarios','$Telefone','$email')");

header("location: comentarios.php");