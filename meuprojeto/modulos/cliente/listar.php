
<font face="sans-serif";>
<table>
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>sexo</th>
        <th>celular</th>
        <th>email</th>
    </tr>

<?php 
        $clientes = array();

        $clientes[] = array("nome"=>"alex", "idade"=>21, "sexo"=>"M", "celular"=>99999, "email"=>"asdfadsf@gmail.com" );
        $clientes[] = array("nome"=>"bruna", "idade"=>22, "sexo"=>"F", "celular"=>99999, "email"=>"asdfadsf@gmail.com" );
        $clientes[] = array("nome"=>"junior", "idade"=>23, "sexo"=>"M", "celular"=>99999, "email"=>"asdfadsf@gmail.com" );  
        ?>
    

    <?php
    
    if($cliente){
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
    }else{
        echo "<tr><td colpan='3'> nehum registro encontrado.</td><tr>";
    }
    
    include("classes/DB.class.php");

    $con = DB::Conexao();

    ?>
    </table>
 </font> 
 