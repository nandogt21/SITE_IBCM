<?php
$nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";
$mysqli= new mysqli($nome_servidor,$login,$password,$database);
 if ($mysqli->connect_error)
      echo"falha na conexao:(" .$mysqli->connect_error.")".$mysqli->connect_error; 

?>