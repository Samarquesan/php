<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>
    <?php 
        $number1 = abs(-1350);
        //echo "A resposta é: $number1";
        $r = base_convert(11011, 2, 16); // primeiro é o número, base numero do número ques está, e qual quer converter 
        //echo " O valor será: $r";
        $r2 = intdiv(7,2);
        //echo "$r2";
        //$r3 = sqrt(36);
        $r3 = 27 ** (1/3);
        echo "A raiz é: $r3";
    ?>
</body>
</html>