<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo</title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]"; //recebe valores HTML Form1 //
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "0"; //recebe valores HTML Form1 //
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]"; //recebe valores HTML Form1 //
        $idade = date("Y") - $ano; // a função date retorna ano atual - ano digitado pelo usuario //
        echo "$nome é $sexo e tem $idade anos de idade<br/>";
    ?>
    <a href="Form1.html">Voltar</a>
</body>
</html>
