<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <?php
    include('../meuprojeto/classes/cliente.class.php');
    ?>

<font face="sans-serif";>

    <h1 style = 'font-size:30px'> Cliente </h1>
    <p1> <font size=4;>Por favor, preencha os campos abaixo</font> </p1><br/><br/>
    <h2 style = 'font-size:20px'> Lista </h2><br/>

    <table >
  

    <form method = "post" action = "">
        nome:<input type = "text" placeholder="ex: joão" name = "nome"/><br/><br/>
        idade:<input type = "text" placeholder="ex: 35" name = "idade"/><br/><br/>
        <input type = "radio" name = "sexo" value = "M"/> masculino
        <input type = "radio" name = "sexo" value = "F"/> feminino <br/><br/>
        celular:<input type = "text" placeholder="ex: 99999999" name = "celular"/><br/><br/>
        email:<input type = "text" placeholder="ex: email@gmail.com" name = "email"/><br/><br/>
        
        <input type = "submit" name = "botao" value = "salvar"/>
        <input type = "reset" name = "botao" value = "reset" />     <br/> <br/>
    </form>

        <?php
        
        $cliente = new cliente();
        $cliente->setNome($_POST['nome']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setSexo($_POST['sexo']);
        $cliente->setCelular($_POST['celular']);
        $cliente->setEmail($_POST['email']);

        echo "o nome do cliente digitado foi: ".$cliente->getNome()."<br/>";
        echo "a idade do cliente digitado foi: ".$cliente->getIdade()."<br/>";
        echo "o sexo do cliente digitado foi: ".$cliente->getSexo()."<br/>";
        echo "o celular do cliente digitado foi: ".$cliente->getCelular()."<br/>";
        echo "o email do cliente digitado foi: ".$cliente->getEmail();

        ?>
</font> 

    </table>
</body>
    </html>