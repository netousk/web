<html>
<font face="sans-serif";>
<?php 


        $clientes = array();

        $clientes[] = array("nome"=>"alex", "idade"=>21, "sexo"=>"M", "celular"=>99999, "email"=>"asdfadsf@gmail.com" );
        $clientes[] = array("nome"=>"bruna", "idade"=>22, "sexo"=>"F", "celular"=>99999, "email"=>"asdfadsf@gmail.com" );
        $clientes[] = array("nome"=>"junior", "idade"=>23, "sexo"=>"M", "celular"=>99999, "email"=>"asdfadsf@gmail.com" );
        
        echo"<pre>";
        print_r($clientes);
        echo"</pre>";

        ?>
    <table>
    
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>sexo</th>
        <th>celular</th>
        <th>email</th>
    </tr> 
    <?php
    foreach($clientes as $cliente){
    ?>
    <tr>
        <td><?php echo $cliente['nome'];?></td>
        <td><?php echo $cliente['idade'];?></td>
        <td><?php echo $cliente['sexo'];?></td>
        <td><?php echo $cliente['celular'];?></td>
        <td><?php echo $cliente['email'];?></td>
    </tr>
    <?php
    }
    ?>
 </font> 
    </body>
</html>