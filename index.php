<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/11/2018
 * Time: 18:47
 */

$tab1= get_defined_constants();
echo "<table  border=1><tr> <th> Nom Constante</th> <th>Valeur </th></tr>";
    foreach($tab1 as $cle =>$valeur){

        echo "<tr><td>".$cle."</td><td>".$valeur."</td></tr>";

    }


echo "</table>";
    ?>