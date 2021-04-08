<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>
    <?php
    include('classes/motor.class.php');
    ?>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha o Motor </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">
    
        <form method = "post" action = "motor.php" >

            <input type = "radio" name = "motor" value = "1.5 L3 aspirado"/> 1.5 L3 aspirado---------------------

            <input type = "radio" name = "motor" value = "1.0 L3 turbo  "/> 1.0 L3 turbo-------------------------------

            <input type = "radio" name = "motor" value = "2.0 L4 turbo  "/> 2.0 L4 turbo--------------------

            <input type = "radio" name = "motor" value = "3.0 L6 turbo  "/> 3.0 L6 turbo-------------------------------

            <input type = "radio" name = "motor" value = "4.0 V8 bi turbo  "/> 4.0 V8 biturbo <br/>

            <img src = "../../../meuprojeto/publico/imagens/1.5 3c a.jpg" width="" height="250"> 
            <img src = "../../../meuprojeto/publico/imagens/1.0 3c t.jpg" width="" height="250"> 
            <img src = "../../../meuprojeto/publico/imagens/2.0 4c t.jpg" width="" height="250"> 
            <img src = "../../../meuprojeto/publico/imagens/3.0 l6 t.jpg" width="" height="250"> 
            <img src = "../../../meuprojeto/publico/imagens/4.0 v8 bt.jpg" width="" height="250"> <br/><br/>

            <input type = "submit" name = "botao" value = "salvar"/>
        </form>

    <a href="carroceria.php"><br/>anterior </a>
    <a href="opcionais.php"><br/>proximo </a><br/><br/>
    <input type = "reset" name = "botao" value = "reset"/><br/><br/>


        <?php 

        $motor = $_POST['motor'];
        echo "motor: ". $motor."<br/>";

        ?>

</table>
    
    </body>
</html>