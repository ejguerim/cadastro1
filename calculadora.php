
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Título</title>
</head>
<body>
<form method="post">



    Valor 1: <input type="text"  name="valor1" title="Valor 1" value="<?php echo $_POST['valor1']; ?>" /> <br>
    Valor 2: <input type="text"  name="valor2" title="Valor 2" value="<?php echo $_POST['valor2']; ?>" /> <br>

    <input type="radio" name="operacao" value="+" checked> Soma <br>

    <input type="radio" name="operacao" value="-"> Subtração <br>

    <input type="radio" name="operacao" value="/"> Divisão <br>

    <input type="radio" name="operacao" value="x"> Multiplicação <br>

    <input type="submit" name="action" value="Enviar" />

</form>


<?php

 if(isset($_POST['operacao'])) {

    if(isset($_POST['valor1']) && trim($_POST['valor1']) !=""  && isset($_POST['valor2']) && trim($_POST['valor2']) != "")  {

        $x = $_POST["valor1"];
        $y = $_POST["valor2"];
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

    } else {

        echo "Informe um valor";


    }

 }


echo '<pre>'. print_r($_GET, true). '</pre>';

echo '<pre>'. print_r($_POST, true). '</pre>';


?>

