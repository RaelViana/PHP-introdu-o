<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php

        /*Modifica as cores e o tamanhop da fonte inseridas no Form2.HTML */
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] :"12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <title>Exemplo</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<Span class='texto'>$txt</Span><br/>" //Apresenta o Texto Modificado
    ?>
<a href="Form2.html">Voltar</a>
</body>
</html>

