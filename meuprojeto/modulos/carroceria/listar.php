<table>
<?php 
        $carrocerias = array();

        $carrocerias[] = array("carroceria"=>"coupe");
        $carrocerias[] = array("carroceria"=>"sedan");
        $carrocerias[] = array("carroceria"=>"wagon");
        $carrocerias[] = array("carroceria"=>"hatchback");
        $carrocerias[] = array("carroceria"=>"pickup");
        

        ?>
    </table>

<table>
    
    <tr>
        <th>carroceria</th>
    </tr> 
    <?php
    foreach($carrocerias as $carroceria){
    ?>
    <tr>
        <td><?php echo $carroceria['carroceria'];?></td>
    </tr>
    <?php
    }
    ?>
    </table>
