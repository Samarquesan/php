<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <main>
        <?php 
            $saque = $_REQUEST['saque'] ?? 0;
            $resto = $saque;
            $tot100 = intdiv($resto, 100);
            $resto = $resto % 100;
            $tot50 = floor($resto /50);
            $resto %= 50;
            $tot20 = (int)($resto / 20);
            $resto %= 20;
            $tot10 = intdiv($resto, 10);
            $resto %= 10;
            $tot5 = floor($resto / 5);
            $resto %= 5;
            // $tot2 = floor($resto / 2);
            // $resto %= 2;
            // $tot1 = floor($resto / 1);
            // $resto %= 1;

        ?>
        <h1></h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual o valor que você quer sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
    
    ?>
    <section>
    <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
    <p>O caixa eletrônica vai disponibilizar as seguintes notas:</p>
    <ul>
        <li><img src="images/100-reais.jpg" alt="Nota de 100" class="nota">X <?=$tot100?></li>
        <li><img src="images/50-reais.jpg" alt="Nota de 50" class="nota"> X <?=$tot50?></li>
        <li><img src="images/20-reais.jpg" alt="Nota de 20" class="nota"> X <?=$tot20?></li>
        <li><img src="images/10-reais.jpg" alt="Nota de 10" class="nota"> X <?=$tot10?></li>
        <li><img src="images/5-reais.jpg" alt="Nota de 5" class="nota"> X <?=$tot5?></li>
        
    </ul>
    </section>
</body>
</html>