<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo com Fluxo de Repetição</title>
</head>
<body>
<form method="get" action="While_front.php">

    <?php
    $n = 1;
    /* Cria Caixa numérica e repete a quantidade de caixas criadas com While */
    while ($n <= 5){
    echo "Valor $n: <input type='number'  name='v$n' max='100' min='0' value='0'/><br/>";
    $n ++;
     }
    ?>

    <input type="submit" value="Enviar"/>
</form>
</body>
</html>

