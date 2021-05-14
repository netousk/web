<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>
    <?php
    include('classes/carroceria.class.php');
    ?>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha a Carroceria </h2>

    <table>
        
        
    <form method = "post" action = "" >
    <input type = "radio" name = "carroceria" value = "Coupe"/> coupe <br/>
    <img src = "../../../meuprojeto/publico/imagens/coupe.jpg" width="250" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Sedan"/> sedan <br/>
    <img src = "../../../meuprojeto/publico/imagens/sedan.jpg" width="250" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Wagon"/> wagon <br/>
    <img src = "../../../meuprojeto/publico/imagens/wagon.jpg" width="250" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Hatchback"/> hatchback <br/>
    <img src = "../../../meuprojeto/publico/imagens/hatchback.jpg" width="250" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Pickup"/> pickup <br/>
    <img src = "../../../meuprojeto/publico/imagens/pickup.jpg" width="250" height="auto"> <br/>
    <input type = "submit" name = "botao" value = "salvar"/>
    </form>

    <input type = "reset" name = "botao" value = "reset"/><br/><br/>
    

<?php
        
        $carroceria = new carroceria();
        $carroceria->setCarroceria($_POST['carroceria']);

        echo "a carroceria selecionada foi: ".$carroceria->getCarroceria();
      
        
        ?>

</table>

</html>