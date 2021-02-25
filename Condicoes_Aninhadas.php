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
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900; // recebe ano do usuário
        $i = date("Y") - $a;  // Subtrai o ano atual ao ano digitado
        echo "Você nasceu em $a e tem $i anos <br/>";  //Print do resultado Operação

        if($i < 16){ // Cria uma Condição inicial 'se'
            $tipoVoto = "NÃO VOTA";
        }
        else if(($i >=16 && $i <18) || ($i > 65)){ // if aninhado
                $tipoVoto = "VOTO OPCIONAL";
        }
        else {
                $tipoVoto = "VOTO OBRIGATÓRIO";
        }


        echo "Na Sua Idade  $tipoVoto <br/>";
    ?>
   <a href="Condicoes_Aninhadas.html">Voltar</a>  <!-- retorna para o usuario digitar novamente -->
</body>
</html>


