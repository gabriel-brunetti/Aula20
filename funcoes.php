<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções PHP</title>
</head>
<body>
    <?php
    // 1a) Definir uma função maior() que receba 3 números e retorne o maior deles

    function maior($a,$b,$c){
        if($a > $b){
            if($a > $c){
                return $a;
            } else {
                return $c;
            }
        } else {
            if ($b > $c){
                return $b;
            } else {
                return $c;
            }
        }
    }

    echo('TESTE DA 1.A<br>');
    echo maior(2,3,10);
    
    // Definir uma função sequencia() que receba um parâmetro base, um
    // parâmetro limite, e retorne um array com a sequência de números a
    // partir do número base até o número limite

    function sequencia($base,$limite){
        $seq = [];
        for ($i=$base; $i <= $limite ; $i++) {
            $seq[] = $i;
        }
        return $seq;
    }

    echo ('TESTE DA 1-B<br>');
    echo('<pre>');
    var_dump(sequencia(2,15));
    echo('</pre>');

    ?>

    
    
</body>
</html>