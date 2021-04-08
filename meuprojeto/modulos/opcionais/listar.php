<?php 
        $opcionais = array();

        $opcionais[] = array("opcionais"=>"ar condicionado");
        $opcionais[] = array("opcionais"=>"direcao hidraulica");
        $opcionais[] = array("opcionais"=>"vidro eletrico");
        $opcionais[] = array("opcionais"=>"alarme");
        $opcionais[] = array("opcionais"=>"air bag");
        
        echo"<pre>";
        print_r($opcionais);
        echo"</pre>";

        ?>
    <table>

<table>
    
    <tr>
        <th>opcionais</th>
    </tr> 
    <?php
    foreach($opcionais as $opcional){
    ?>
    <tr>
        <td><?php echo $opcional['opcionais'];?></td>
    </tr>
    <?php
    }
    ?>