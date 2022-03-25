<?php

include 'conexao.php';
include 'script/passoword.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];


$sql = "SELECT mail_usuario FROM usuarios WHERE mail_usuario = '$usuario'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);

if ($total > 0) {
	# conferir senha

} else {

    header('Location: erro.php');

}






?>



