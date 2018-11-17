<html lang="br">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="arquivo.css">
        <title>Galeria</title>       
        <style>
            .galeria_pagina_fotos{
                padding:0;
                margin:0;
                background:black;
            }
            .titulo{
               background-color:#46b8da;
               
            }
           
        </style>
        <script 
            type="text/javascript" src="java.js">
          
        
        </script>
    </head>
    <body class="galeria_pagina_fotos">
        <h1 class="titulo"><center>Esta e a galeria</center></h1>
        
        <section class="container gallery-container">

            <!--Slide-->
            <div class="mySlides fade" class="active"> <!-- 01 -->
                <div class="numbertext">01 / 05</div>
                <img class="imgslide" src="imagens/salao5.jpg" alt="AZUL"/>
                <div class="text">Tema azul festas 15 anos</div>
            </div>

            <div class="mySlides fade"> <!-- 02 -->
                <div class="numbertext">02 / 05</div>
                <img class="imgslide" src="imagens/salao2.jpg" alt="Arara Canindé"/>
                <div class="text">Tema azul festas 15 anos</div>
            </div>

            <div class="mySlides fade"> <!-- 03 -->
                <div class="numbertext">03 / 05</div>
                <img class="imgslide" src="imagens/salao4.jpg"  alt="Papagaio Verdadeiro"/>
                <div class="text">Descriçao .. Tema azul</div>
            </div>

            <div class="mySlides fade"> <!-- 04 -->
                <div class="numbertext">04 / 05</div>
                <img class="imgslide" src="imagens/salao5.jpg" alt="Jandaia"/>
                <div class="text">Descriçao Tema azul</div>
            </div>

            <div class="mySlides fade"> <!-- 05 -->
                <div class="numbertext">05 / 05</div>
                <img class="imgslide" src="imagens/tema_casamento3.jpg" alt="Jandaia"/>
                <div class="text">Descriçao tema azul</div>
            </div>
            <!--Final Slides-->

            <!--Navigation-->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </section>
        
 
                
    </body>
</html>
