<?php
 
  $nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";
$conexao= mysqli_connect($nome_servidor,$login,$password,$database);
if($conexao->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  /*$senha = md5($_POST['senha']);*/
 
             
     $verifica = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' AND admin=1");
        if (mysqli_num_rows($verifica)>0){
           $_SESSION["email"]=$email;
            $_SESSION["senha"]=$senha;
            
                    echo("<script>alert('Usuario Administrador'); location.href='upload.php';</script>");
                
            
                      
        }else{
           
         
           echo ("<script>alert('Login incorreto'); location.href='index.php';</script>");
           
          
        }
    
    ?> 