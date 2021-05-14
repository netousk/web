<table>
<?php 
        $cores = array();

        $cores[] = array("cor"=>"preto");
        $cores[] = array("cor"=>"prata");
        $cores[] = array("cor"=>"branco");
        $cores[] = array("cor"=>"azul");
        $cores[] = array("cor"=>"vermelho");
        

        ?>
</table>

<table>
    
    <tr>
        <th>modelo</th>
    </tr> 
    <?php
    foreach($cores as $cor){
    ?>
    <tr>
        <td><?php echo $cor['cor'];?></td>
    </tr>
    <?php
    }
    ?>
</table>