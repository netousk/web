<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "../../publico/css/estilo.css" />
        
    </head>
    <body>

    <?php
    include('../meuprojeto/classes/modelo.class.php');
    ?>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <p1> Escolha o modelo do carro a ser montado </p1>
    <h2 style = 'font-size:20px'> Lista </h2>

    <table>

    <form method = "post" action = "" >

    <input type = "radio" name = "modelo" value = "Civic"/> civic<br/>
    <img src = "../../../meuprojeto/publico/imagens/civic.jpeg" width="300" height="auto"> <br/><br/>
    
    <input type = "radio" name = "modelo" value = "Supra"/> supra<br/>
    <img src = "../../../meuprojeto/publico/imagens/supra.jpg" width="300" height="auto"><br/><br/>
    
    <input type = "radio" name = "modelo" value = "Gtr"/> gtr<br/>
    <img src = "../../../meuprojeto/publico/imagens/gtr.jpg" width="300" height="auto"><br/><br/>

    <input type = "radio" name = "modelo" value = "Impreza"/> impreza<br/>
    <img src = "../../../meuprojeto/publico/imagens/impreza.jpg" width="300" height="auto"><br/><br/>

    <input type = "radio" name = "modelo" value = "Lancer"/> lancer <br/>
    <img src = "../../../meuprojeto/publico/imagens/lancer.jpg" width="285" height="auto"> <br/><br/>
    
     
     
     
    

    <input type = "submit" name = "botao" value = "salvar"/></a>   
    <input type = "reset" name = "botao" value = "reset"/><br/><br/>
    </form>

        <?php
        
        $modelo = new modelo();
        $modelo->setModelo($_POST['modelo']);

        echo "o modelo selecionado foi: ".$modelo->getModelo();
      
        
        ?>

</table>
        

    </body>
</html>