<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css.css">
    

  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Area Administrativa</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Entre com seu email e senha admin</p>
   </div>
    <form id="Login"  method="POST" action="valida_login.php">

        <div class="form-group">


            <input type="email" class="form-control" name="email" placeholder="Email">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="senha" placeholder="Senha">
            <br></br>

        </div>
       
        <input type="submit" name="Login" class="btn btn-primary">

    </form>
    <a href="cadastro.php"> Efetuar Cadastro Administrativo </a>
    </div>

</div></div></div>


</body>
</html>
