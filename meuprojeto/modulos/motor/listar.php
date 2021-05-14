<table>
        <?php 
        $motores = array();

        $motores[] = array("motor"=>"1.5 L3 aspirado");
        $motores[] = array("motor"=>"1.0 L3 turbo");
        $motores[] = array("motor"=>"2.0 L4 turbo");
        $motores[] = array("motor"=>"3.0 L6 turbo");
        $motores[] = array("motor"=>"4.0 V8 biturbo");
        

        ?>
</table>

<table>
 
    <tr>
        <th>motores</th>
    </tr> 
    <?php
    foreach($motores as $motor){
    ?>
    <tr>
        <td><?php echo $motor['motor'];?></td>
    </tr>
    <?php
    }
    ?>
</table>