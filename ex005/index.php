<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="style05.css">
</head>
<body>
    <?php 
        // $nome = "Samuel";
        // $sobrenome = 'Marques';
        // $canal = "Curso em vídeo \u{1f499} ";

        // echo "Eu adoro o " . $canal;
        // echo "$nome $sobrenome \u{1f596} \n ";
        // echo ' $nome $sobrenome \u{1f596} ';

        // echo "Estamos no ano de " . date('Y');


        // $nom = "Rodrigo";
        // $snom = "Nogueira";

        // echo "$nom 'Minotauro' $snom.";

        // $nome = "Gustavo";
        // $sobrenome = "Guanabara";
        // $apelido = "Gafanhoto";
        // echo "$nome \"$apelido\" $sobrenome";// as barras aqui são caractéres de escape permitindo a sintaxe coreeta do conexto apelido.

        //Heredoc
        $curso = "PHP";
        $ano = date('Y');
        echo <<< dataDeLancamento
            Olá alunos  do curso de $curso
                será adicionado ao nosso catalogo
            o novo módulo no ano de $ano.

            Forte abraço!

        dataDeLancamento;
    ?>
</body>
</html>