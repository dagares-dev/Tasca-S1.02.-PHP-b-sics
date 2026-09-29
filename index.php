<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercicis PHP</title>
<style>
    .contenedor {
      display: flex;
      gap: 40px;
      align-items: flex-start;
    }
  </style>
</head>
<body>

<div class="contenedor">

<!-- Exercici 1 -->
<div>
<h3>Exercici 1</h3>
<pre>
<?php
$numero = 13;
$decimal = 5.8;
$nom = "Apple";
$bool = true;
const MEU_NOM = "David";

echo $numero . "\n";
echo $decimal . "\n";
echo $nom . "\n";
echo $bool . "\n";

echo "<br>";

var_dump($numero);
var_dump($decimal);
var_dump($nom);
var_dump($bool);

echo "<br>";
echo "<br>";

echo "<h1>" . MEU_NOM . "</h1>";
?>
</pre>
</div>

<!-- Exercici 2 -->
<div>
<h3>Exercici 2</h3>
<pre>
<?php
$text = "Hello, World!";
echo $text . "\n";
echo strtoupper($text) . "\n"; // MAJÚSCULES
echo strlen($text) . "\n"; // Longitud
echo strrev($text) . "\n"; // Ordre invers

$nova = "Aquest és el curs de PHP";
echo $text . " " . $nova . "\n";
?>
</pre>
</div>

<!-- Exercici 3 -->
<!-- a) -->
<div>
<h3>Exercici 3</h3>
<h4>a)</h4>
<pre>
<?php
$X = 7;
$Y = 3;
echo $X . "\n";
echo $Y . "\n";

echo "<br>";

$suma = $X + $Y;
$resta = $X - $Y;
$multiplicacion = $X * $Y;
$resto = $X % $Y;

echo "la suma de les variables X i Y és: $suma" . "\n";
echo "la resta de les variables X i Y és: $resta" . "\n";
echo "la multiplicació de les variables X i Y és: $multiplicacion" . "\n";
echo "El residu de la divisió de les variables X i Y és: $resto" . "\n";

echo "<br>";

$N = 2.5;
$M = 6.5;
echo $N . "\n";
echo $M . "\n";

echo "<br>";

$suma2 = $N + $M;
$resta2 = $N - $M;
$multiplicacion2 = $N * $M;
$resto2 = fmod($N, $M); //decimals

echo "la suma de les variables N i M és: $suma2" . "\n";
echo "la resta de les variables N i M és: $resta2" . "\n";
echo "la multiplicació de les variables N i M és: $multiplicacion2" . "\n";
echo "El residu de la divisió de les variables N i M és: $resto2" . "\n";

echo "<br>";

$dobleX = $X * 2;
$dobleY = $Y * 2;
$dobleN = $N * 2;
$dobleM = $M * 2;

echo "El doble de X és: $dobleX" . "\n";
echo "El doble de Y és: $dobleY" . "\n";
echo "El doble de N és: $dobleN" . "\n";
echo "El doble de M és: $dobleM" . "\n";

echo "<br>";

$sumaTotal = $X + $Y + $N + $M;
echo "La suma de totes les variables és: $sumaTotal" . "\n";

echo "<br>";

$producteTotal = $X * $Y * $N * $M;
echo "El producte de totes les variables és: $producteTotal" . "\n";
?>
</pre>

<!-- b) -->
<h4>b)</h4>
<pre>
<?php
function calcular($num1, $num2, $operacio) {

    if ($operacio == "suma") {
        $resultat = $num1 + $num2;
        return "La suma de $num1 i $num2 és: $resultat";
    } elseif ($operacio == "resta") {
        $resultat = $num1 - $num2;
        return "La resta de $num1 i $num2 és: $resultat";
    } elseif ($operacio == "multiplicacio") {
        $resultat = $num1 * $num2;
        return "La multiplicació de $num1 i $num2 és: $resultat";
    } elseif ($operacio == "divisio") {
        if ($num2 == 0) {
            return "No es pot dividir $num1 entre 0";
        } else {
            $resultat = $num1 / $num2;
            return "La divisió de $num1 entre $num2 és: $resultat";
        }
    }

}

echo calcular(10, 5, "suma") . "\n";
echo calcular(10, 5, "resta") . "\n";
echo calcular(10, 5, "multiplicacio") . "\n";
echo calcular(10, 5, "divisio") . "\n";
echo calcular(10, 0, "divisio") . "\n";
?>
</pre>
</div>

</div>

</body>
</html>