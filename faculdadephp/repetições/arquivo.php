<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetiçoes com php</title>
</head>
<body>
    <h1>Estruturas de repetições </h1>
    <h2>WHILE</h2>
    <?php 
        $n = 2;
        while($n <= 10){ //enquanto $n for menor ou igual a 10
            echo $n;
            $n += 2; //incrementa $n em 2
            echo "\n"; //quebra de linha
        }
    ?>
</body>
</html>