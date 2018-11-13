
<html>
    <head>
        <title>Upload de imagens</title>
    </head>
    <body>
        <?php
        include("upload/classe/conexao.php");
        
        $msg=false;
        if(isset($_FILES['arquivo'])){
            
           $extensao= strtolower(substr($_FILES['arquivo']['name'], -4));
           $novo_nome=md5(time()) .$extensao;
           $diretorio="upload/";
           
           move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$novo_nome);//efetuar o upload do temp para diretorio
           
           $sql_code ="insert into upload ( id, nome,data) values (null, '$novo_nome', NOW())";
           if ($mysqli->query($sql_code))
               $msg="arquivo enviado com sucesso";
           else $msg="falha ao enviar";
           
           
        }
        ?>
        <?php
        if($msg !=false)            echo "<p>$msg</p>";
                ?>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="arquivo" required>
            <input type="submit">
          
        </form>
         </body>
</html>



