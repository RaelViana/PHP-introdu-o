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

            /* Os casos foram dividios em três etapas (c -2,3,4,5,6) (c-7,8) e (default) */
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0 ; //pega num HTML e joga na variavel $d

        switch ($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia util precisa trabalhar"; //imprime caso usuário deigite de 2 á 6
                break;
            case 7:
            case 8:
                echo "Descanse , é final de semana !"; //imprime caso usuário deigite de 7 ou 8
                break;
            default:
                echo "Dia da semana Inválido"; // qualquer outro valor será inválido por (default) padrão
        }


    ?>
    <a href="Switch_Multiplos_Casos.html">Voltar</a>  <!-- retorna para o usuario digitar novamente -->
</body>
</html>


