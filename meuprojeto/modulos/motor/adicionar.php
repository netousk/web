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

    <table>
        <td align = "center">

    
        <form method = "post" action = "" >

            <input type = "radio" name = "motor" value = "1.5 L3 aspirado"/> 1.5 L3 aspirado<br/>
            <img src = "../../../meuprojeto/publico/imagens/1.5 3c a.jpg" width="" height="250"> <br/><br/>

            <input type = "radio" name = "motor" value = "1.0 L3 turbo  "/> 1.0 L3 turbo<br/>
            <img src = "../../../meuprojeto/publico/imagens/1.0 3c t.jpg" width="" height="250"> <br/><br/>

            <input type = "radio" name = "motor" value = "2.0 L4 turbo  "/> 2.0 L4 turbo<br/>
            <img src = "../../../meuprojeto/publico/imagens/2.0 4c t.jpg" width="" height="250"> <br/><br/>

            <input type = "radio" name = "motor" value = "3.0 L6 turbo  "/> 3.0 L6 turbo<br/>
            <img src = "../../../meuprojeto/publico/imagens/3.0 l6 t.jpg" width="" height="250"> <br/><br/>

            <input type = "radio" name = "motor" value = "4.0 V8 bi turbo  "/> 4.0 V8 biturbo <br/>
            <img src = "../../../meuprojeto/publico/imagens/4.0 v8 bt.jpg" width="" height="250"> <br/><br/>

            <input type = "submit" name = "botao" value = "salvar"/>
        </form>

    <input type = "reset" name = "botao" value = "reset"/><br/><br/>


    <?php
        
        $motor = new motor();
        $motor->setMotor($_POST['motor']);

        echo "o motor selecionado foi: ".$motor->getMotor();
      
        
        ?>

</table>
    
    </body>
</html>