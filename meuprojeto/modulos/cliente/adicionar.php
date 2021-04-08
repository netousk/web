<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <?php
    include('classes/cliente.class.php');
    ?>

<font face="sans-serif";>

    <h1 style = 'font-size:30px'> Cliente </h1>
    <p1> <font size=4;>Por favor, preencha os campos abaixo</font> </p1>
    <h2 style = 'font-size:20px'> Lista </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">
     

    <form method = "post" action = "">
        nome:<input type = "text" placeholder="nome" name = "nome"/><br/><br/>
        idade:<input type = "text" name = "idade"/><br/><br/>
        <input type = "radio" name = "sexo" value = "M"/> masculino
        <input type = "radio" name = "sexo" value = "F"/> feminnino <br/><br/>
        celular:<input type = "text" name = "celular"/><br/><br/>
        email:<input type = "text" name = "email"/><br/><br/>
        <input type = "submit" name = "botao" value = "salvar"/>
        <input type = "reset" name = "botao" value = "reset" />      
    </form>


        <?php 
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];   
        $sexo = $_POST['sexo'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];

        echo "nome: ". $nome."<br/>";
        echo "idade: ". $idade."<br/>";
        echo "sexo: ". $sexo."<br/>";
        echo "celular: ". $celular."<br/>";
        echo "email: ". $email."<br/>"

        ?>
        <?php
        
        $cliente = new cliente();
        $cliente->nome = $_POST['nome'];
        $cliente->idade = $_POST['idade'];
        $cliente->sexo = $_POST['sexo'];
        $cliente->celular = $_POST['celular'];
        $cliente->email = $_POST['email'];

        echo "o nome do cliente digitado foi: ".$cliente->nome;
        echo "a idade do cliente digitado foi: ".$cliente->idade;
        echo "o sexo do cliente digitado foi: ".$cliente->sexo;
        echo "o celular do cliente digitado foi: ".$cliente->celular;
        echo "o email do cliente digitado foi: ".$cliente->email;

        ?>
</font> 

    </table>
</body>
    </html>