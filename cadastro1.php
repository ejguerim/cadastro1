<?php


//echo '<pre>'. print_r($_GET, true). '</pre>';

echo '<pre>'. print_r($_GET, true). '</pre>';

$x = $_GET["valor1"];
$y = $_GET["valor2"];
$o = $_GET["operacao"];

if($o=="S")
    $z = $x + $y;
elseif($o=="D")
    $z = $x - $y;
elseif($o=="M")
    $z = $x*$y;
elseif($o=='DIV')
    $z = $x/$y;
echo "Resultado Final: $z";


echo "<br>";

switch ($o) {

    case "S" :
        $z = $x + $y;
        echo "Resultado Final: $z";
        break;
    case "D" :
        $z = $x - $y;
        echo "Resultado Final: $z";
        break;
    case "M" :
        $z = $x*$y;
        echo "Resultado Final: $z";
        break;
    case "DIV" :
        $z = $x/$y;
        echo "Resultado Final: $z";
        break;

}




