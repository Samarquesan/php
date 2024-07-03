<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio  07 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salMinimo = 1_640.00;
        
        $salario = $_GET['sal'] ?? $salMinimo;

        

        
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salMinimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $salMinimo);
            $dif= $salario % $salMinimo;

            echo "<p>Ganha <strong>$tot salários mínimos</strong> + <strong> R\$ ".number_format($dif, 2, ",", ".")."</strong>.</p>"
        ?>
    </section>
</body>
</html>