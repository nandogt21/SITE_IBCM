<?php
$nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";
$conexao= mysqli_connect($nome_servidor,$email,$senha,$database);
if($conexao->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 } 

?>