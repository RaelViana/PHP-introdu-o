<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo</title>
</head>
<body>
    <?php
        $valor = $_GET["v"]; // Recebe o valor de <input name="" ,HTML //
        $r = sqrt($valor); // aplica função  raiz quadrada em $valor
        echo "A Raiz Quadrada de  $valor é igual a ". number_format($r, 2),"<br/>";

    ?>
    <a href="HTML_integracao.html">Voltar</a>  <!--  cria um retorno á pagina HTML -->

</body>
</html>