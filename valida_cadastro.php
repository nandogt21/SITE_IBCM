<html>
<head>
    
</head>
<body>
<?php
$nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";
$conexao= mysqli_connect($nome_servidor,$email,$senha,$database) or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql=mysql_query("INSERT INTO usuarios(nome,email,senha) values('$nome','$email','$senha')");
?>
</body>
</html>
