<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
         $totalSegundos = $_GET['seg'] ?? 0;
        // $sobra = $total;
        // //Total semanas
        // $semanas = (int)($sobra / 604_800);
        // $sobra = $sobra % 604_800;
        // //Total de dias 
        // $dias = (int)($sobra / 86_400);
        // $sobra = $sobra % 86_400;
        // //Total de horas
        // $horas = (int)($sobra / 3_600);
        // $sobra = $sobra % 3_600;
        // //Total minutos
        // $minutos = (int)($sobra / 60);
        // $sobra = $sobra % 60;
        // // Total segundos
        // $segundos = $sobra;

        // echo "<p>O tempo foi de: $semanas semanas, $dias dias, $horas horas, $minutos minutos e $segundos segundos.</p>";


    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$totalSegundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $totalSegundos;
        $semanas = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        
        $dias = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        
        $horas = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        
        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;
        
        $segundos = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($totalSegundos, 0, ",", ".")?> segundos</strong> equivalem ao total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>