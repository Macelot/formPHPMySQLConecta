<?php
header( 'content-type: text/html; charset=utf-8' );
$server="localhost";
$user=$_POST['txtUsuario'];
$pass=$_POST['txtSenha'];
$base=$_POST['txtBase'];
$porta=3307;

$mysqli = new mysqli($server,$user,$pass,$base,$porta);
if($mysqli->connect_errno){
	echo "<br>Erro na conexão";
}else{
	echo "<br>Deu certo a conexão";
}
?>