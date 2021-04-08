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

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">
        
    <form method = "post" action = "carroceria.php" >
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

    <a href="modelo.php"><br/>anterior </a>  
    <a href="motor.php"><br/>proxima</a><br/><br/>
    <input type = "reset" name = "botao" value = "reset"/><br/><br/>
    

        <?php 

        $carroceria = $_POST['carroceria'];

        echo "carroceria: ". $carroceria."<br/>";

        ?>

</table>

</html>