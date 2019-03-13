

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Título</title>
</head>
<body>
<form method="post">

    <br><br>

    Valor 1: <input type="text"  name="valor1" title="Valor 1" /> <br><br>
    Valor 2: <input type="text"  name="valor2" title="Valor 2" /> <br><br>

    <input type="radio" name="operacao" value="+" checked> Soma <br><br>

    <input type="radio" name="operacao" value="-"> Subtração <br><br>

    <input type="radio" name="operacao" value="/"> Divisão <br><br>

    <input type="radio" name="operacao" value="x"> Multiplicação <br><br>


    Nome: <input type="text"  name="nome1" /> <br><br>

    Selecione um arquivo: <input type="file" namne="arquivo1"> <br><br>

    Digite a Senha: <input type="password" namne="pw"> <br><br>

    Campo Hidden: <input type="hidden" name="hidden1"> <br><br>

    Mail: <input type="email" name="mail1"> <br><br>

    <input type="submit" name="action" value="Enviar" />

</form>
</body>
</html>

<?php


$x = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_FLOAT);
$y = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_FLOAT);

$xnome = filter_input(INPUT_POST, 'nome1', FILTER_SANITIZE_STRING);

$tamanho = strlen($xnome);

echo "<br>";
echo "<br>";
echo "Tamanho da string: $tamanho";

echo "<br>";
echo "<br>";
echo "<br>";

echo "O valor e: $x";

echo "<br>";
echo "<br>";
echo "<br>";

if(isset($_POST['operacao'])) {

        $op = $_POST["operacao"];

        if ($op == "+")
            $z = $x + $y;

        elseif ($op == "-")
            $z = $x - $y;


        elseif ($op == "x")
            $z = $x * $y;


        else
            if ($y !=0) {
                $z = $x / $y;
            } else {
                echo "Valor não pode ser zero";

            }

        echo "O resultado e: $z";

    echo "<br>";
    echo "<br>";
    echo "<br>";


}


echo '<pre>'. print_r($_GET, true). '</pre>';

echo '<pre>'. print_r($_POST, true). '</pre>';


?>

