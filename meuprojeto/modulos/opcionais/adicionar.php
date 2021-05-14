<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>
    <?php
    include('classes/opcionais.class.php');
    ?>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha os opcionais </h2>

    <table>

        <form method = "post" action = "opcionais.php" >
            <input type = "checkbox" name = "arcondicionado" value = "ar condicionado"/>ar condicionado<br/>
            <input type = "checkbox" name = "direcaohidraulica" value = "direcao hidraulica"/>direcao hidraulica<br/>
            <input type = "checkbox" name = "vidroeletrico" value = "vidro eletrico"/>vidro eletrico<br/>
            <input type = "checkbox" name = "alarme" value = "alarme"/>alarme<br/>
            <input type = "checkbox" name = "airbag" value = "air bag"/>air bag<br/><br/>

            <input type = "submit" name = "botao" value = "salvar"/>
        </form>
    <input type = "reset" name = "botao" value = "reset"/><br/><br/>

        <?php 

        $arcondicionado = $_POST['arcondicionado'];
        $direcaohidraulica = $_POST['direcaohidraulica'];
        $vidroeletrico = $_POST['vidroeletrico'];
        $alarme = $_POST['alarme'];
        $airbag = $_POST['airbag'];

        echo "opcionais selecionados: ".$arcondicionado.", ".$direcaohidraulica.", ".$vidroeletrico.", ".$alarme.", ".$airbag."<br/>";


        ?>

</table>

    </body>
</html>