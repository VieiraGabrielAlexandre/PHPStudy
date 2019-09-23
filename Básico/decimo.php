<?php 
    $i = $_POST["dado1"];
    $j = $_POST["dado2"];
    for ($contador1 = 0; $contador1<1; $contador1++)
    {
        for ($contador2 = 0; $contador2 <=$j; $contador2++)
        {
            echo $i." * ".$contador2." = ".$i*$contador2."<br>";
        }
    }