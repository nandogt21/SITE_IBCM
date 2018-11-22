<html>
<head>
    <title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body{
        background-color:#333;
    }
    #cor_nome{
        color:white;
    }
</style>
<script type="text/javascript" src="validar.js"></script>

</head>
<body>
 
    
<div class="container" >
	<div class="row">
            <center id="cor_nome"><h2>CRIE SEU CADASTRO ADMINISTRATIVO.</h2></center>
	</div>
</div>
    <form class="form-horizontal" name="form" method="POST"  onsubmit="return validar();" action="valida_cadastro.php">
<fieldset >


    <a id="cor_nome"><center><p><h3>Area Administrativa</h3></p></center></a><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" id="cor_nome">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="Insira seu nome completo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label"  for="textinput" id="cor_nome">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Digite seu melhor e-mail" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" name="senha" for="textinput" id="cor_nome">Senha</label>
  <div class="col-md-4">
  <input id="textinput" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="salvar"  class="btn btn-primary">Confirmar</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
