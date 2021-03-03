<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotinas</title>
</head>
<body>
    <?php
    /* Function   soma   */
    function soma($a, $b) { // Define a uma função  a dois objetos sem valores especificos
        $s = $a + $b;   // variável '$s' especifica  a operação aos objetos
        echo "<p> A Soma Vale $s</p>"; //imprime valor da operação separadados por parágrafo

    }
    soma(3, 4); //chama o método soma e insere valores para A e B
    soma(7,6);  //chama o método soma e insere valores para A e B

    function soma1($a, $b) {
        $s = $a + $b;
        return $s; //retorna valor de '$s'
    }
    $x = 3; //define um valor pra '$x'
    $y = 5; //define um valor pra '$y'
    $r = soma1($x,$y); //chama o método 'soma1' para realizar a operação de adição
    echo  "A soma entre $x e $y é igual a $r"; // imprime valor de '$r'


    ?>
</body>
</html>
