<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variaveis e constantes</h1>
    <?php 
        $nome = "Samuel";
        $sobrenome = "Marques! ";
        $nome = "Cassio";
        $sobrenome = "Goes! ";
        const pais = "Brasil";
        $num1 = 1;
        $num2 =2;
        $soma = $num1 + $num2;
        
        //echo "$soma"; 
        echo "Boa noite, $nome $sobrenome";
        echo "Seu país é o(a): ". pais;
    ?>
</body>
</html>