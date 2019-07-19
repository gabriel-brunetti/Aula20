<?php
    function concatena($str1, $str2){
        return  $str1.$str2;
    }

    function somaMultiplicaPorDois($x, $y){
        return($x + $y)*2;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        $resultado = concatena('João','Feijão');
        echo $resultado;
        echo('<br>');
        
        echo concatena('Maria','Bacia');
        echo('<br>');

        echo 'Soma e multiplica por dois<br>';
        echo somaMultiplicaPorDois(5,8);
        echo('<br>');


    ?>

</body>
</html>