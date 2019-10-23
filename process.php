<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'Email',FILTER_SANITIZE_EMAIL);

$saida ="INSERT INTO Usuario(Nome,Email) VALUES ($nome,$email)";

$resultado = mysqli_query($conn, $saida);






 ?>
