<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>
    <?php
    include('classes/cor.class.php');
    ?>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha a Cor </h2>

    <table>

        <form method = "post" action = "cor.php" >
            <input type = "radio" name = "cor" value = "preto"/> preto<br/>

            <input type = "radio" name = "cor" value = "prata"/> prata<br/>

            <input type = "radio" name = "cor" value = "branco"/> branco<br/>

            <input type = "radio" name = "cor" value = "azul"/> azul<br/>

            <input type = "radio" name = "cor" value = "vermelho"/> vermelho<br/><br/>
        <input type = "submit" name = "botao" value = "salvar"/>
        </form>
    <input type = "reset" name = "botao" value = "reset"/><br/><br/>


        <?php 

        $cor = $_POST['cor'];
        echo "a cor selecionada foi: ". $cor."<br/>";

        ?>

</table>

    </body>
</html>