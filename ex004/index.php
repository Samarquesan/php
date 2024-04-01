<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis primitivas</title>
    <link rel="stylesheet" href="style04.css">
</head>
<body>
    <h1>Entendendo as variáveis</h1>
    <h2>Váriaveis primitivas</h2>
    <?php 
     //0x = hexadecimal 0b = binário 0 = octal
     //     $num = 010;
     //     echo "O valor da variável é $num";

    //  $v = "Samuel";
    //  var_dump($v);

    // $num = (int)3e2;//coerção força a tipagem da variável
    // echo "O valor é $num.";
    // var_dump($num);

    // $num = (double) "950";
    // var_dump($num);

    // $vet= [10,20,30,40,50];
    // var_dump($vet);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);

    ?>
</body>
</html>