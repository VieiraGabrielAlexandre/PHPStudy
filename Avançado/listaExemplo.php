<?php
    $lista = [1,2,3,4,5,6,7,8,9,10];
    $lista[] = [11];
    foreach ($lista as $numero){
        echo $numero."<br>";
    }