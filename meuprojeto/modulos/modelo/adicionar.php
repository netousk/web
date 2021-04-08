<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "../../publico/css/estilo.css" />
        
    </head>
    <body>

    <?php
    include('classes/modelo.class.php');
    ?>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <p1> Escolha o modelo do carro a ser montado </p1>
    <h2 style = 'font-size:20px'> Lista </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">

    <form method = "post" action = "modelo.php" >

    <input type = "radio" name = "modelo" value = "Civic"/> civic---------------------------------------------

    <input type = "radio" name = "modelo" value = "Supra"/> supra---------------------------------------------

    <input type = "radio" name = "modelo" value = "Gtr"/> gtr------------------------------------------------

    <input type = "radio" name = "modelo" value = "Impreza"/> impreza------------------------------------------

    <input type = "radio" name = "modelo" value = "Lancer"/> lancer <br/>

    <img src = "../../../meuprojeto/publico/imagens/civic.jpeg" width="300" height="auto"> 
    <img src = "../../../meuprojeto/publico/imagens/supra.jpg" width="300" height="auto"> 
    <img src = "../../../meuprojeto/publico/imagens/gtr.jpg" width="300" height="auto"> 
    <img src = "../../../meuprojeto/publico/imagens/impreza.jpg" width="300" height="auto"> 
    <img src = "../../../meuprojeto/publico/imagens/lancer.jpg" width="285" height="auto"> <br/><br/>

    <input type = "submit" name = "botao" value = "salvar"/></a>   
    </form>

    <input type = "reset" name = "botao" value = "reset"/><br/><br/>


        <?php
        
        $modelo = $_POST['modelo'];

        echo "modelo: ". $modelo."<br/>";
        
        ?>

</table>
        

    </body>
</html>