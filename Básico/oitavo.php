<html>
    <head>
        <title>
            Oitavo
        </title>
    </head>
<?php

    $idade = $_POST["dado1"];
    $acompanhante = $_POST["dado2"];
    if ($idade >= 18) {
        echo "Você é maior de idade. <br>Pode entrar !";
    } else {
        echo "Você é menor de idade. <br>Volte !";
    }
    ?>
</html>