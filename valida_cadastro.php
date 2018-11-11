<?php
session_start();
include_once("conexao.php");

$nome= filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha= filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);



//echo"usuario: $usuario<br>";
//echo"senha: $senha<br>";
//echo"email: $email<br>";
//echo"telefone: $telefone<br>";

$result_usuario="INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')";
$resultado_usuario=mysqli_query($conexao,$result_usuario);


if(mysqli_insert_id($conexao)){
    $SESSION['msg']=cadastrado;
  
    echo ("<script>alert('Cadastrado Com sucesso'); location.href='index.php';</script>");
   
   }
   else{
       $_SESSION['msg']="<p style='color:green;'>Usuario Cadastrado nao comcluido</p>";
   echo ("<script>alert('Email já existente,tente novamente....'); location.href='cadastro.php';</script>");
   }
?>