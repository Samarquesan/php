<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Teste de números aleatórios</h1>
       
        <?php 
            $min = 0;
            $max= 100;
            
            $num = mt_rand($min, $max);
        
            echo "<p>Gerando um número aleatório... </br>O número soretado foi: <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro número</button>
    </main>
    
</body>
</html>