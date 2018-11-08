<html>
<head>
    <title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css.css"
</head>
<body>
 
    
<div class="container">
	<div class="row">
            <center><h2>CRIE SEU CADASTRO ADMINISTRATIVO.</h2></center>
	</div>
</div>
    <form class="form-horizontal" method="POST" action="valida_cadastro.php">
<fieldset >

<!-- Form Name -->
<legend><p>Area Administrativa</p></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="Insira seu nome completo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Digite seu melhor e-mail" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Senha</label>
  <div class="col-md-4">
  <input id="textinput" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="salvar" class="btn btn-primary">Confirmar</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
