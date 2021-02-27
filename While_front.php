<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo Fluxo repetição</title>
</head>
<body>
    <?php
    $d = 1;
    while ($d <=5){
        $v = "num" .$d;
        $url ="v". $d;  //atrubui valor de "v"  á $url
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0; // Variavel dinâmica $$v (variavel de variavel)
        $d ++;
    }
    $d = 1;
    while ($d <=5 ){
        $v = "num".$d;
        echo "Valor inserido no campo  $d = " . $$v ."<br/>";
        $d ++;
    }
    ?>
    <a href="While_back.php">Voltar</a>
</body>
</html>

