<?php 
        $modelos = array();

        $modelos[] = array("modelo"=>"civic");
        $modelos[] = array("modelo"=>"supra");
        $modelos[] = array("modelo"=>"gtr");
        $modelos[] = array("modelo"=>"impreza");
        $modelos[] = array("modelo"=>"lancer");
   

        ?>
    
<table>
    
    <tr>
        <th>modelo</th>
    </tr> 
    <?php
    foreach($modelos as $modelo){
    ?>
    <tr>
        <td><?php echo $modelo['modelo'];?></td>
    </tr>
    <?php
    }
    ?>
</table>
