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

<!-- NIVELL 1 -->
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

<!-- Exercici 4 -->
<div>
<h3>Exercici 4</h3>
<pre>
<?php

function comptar($numero = 10, $quant = 1) {

    for ($i = 1; $i <= $numero; $i = $i + $quant) {
        echo $i . "\n";
    }

}

echo "Compte fins a 10, d'1 en 1:" . "\n";
comptar();

echo "<br>";

echo "Compte fins a 20, de 2 en 2:" . "\n";
comptar(20, 2);

echo "<br>";

echo "Compte fins a 10, de 3 en 3:" . "\n";
comptar(10, 3);

?>
</pre>
</div>

<!-- Exercici 5 -->
<div>
<h3>Exercici 5</h3>
<pre>
<?php

function grau_estudiant($nota) {

    if ($nota >= 60) {
        return "La nota es: $nota%, has entrat a Primera Divisió";
    } elseif ($nota >= 45) {
        return "La nota es: $nota%, has entrat a Segona Divisió";
    } elseif ($nota >= 33) {
        return "La nota es: $nota%, has entrat a Tercera Divisió";
    } else {
        return "La nota es: $nota%, has de Reprovat";
    }

}

echo grau_estudiant(83) . "\n";
echo grau_estudiant(50) . "\n";
echo grau_estudiant(37) . "\n";
echo grau_estudiant(18) . "\n";

?>
</pre>
</div>

<!-- Exercici 6 -->
<div>
<h3>Exercici 6</h3>
<pre>
<?php

function isBitten() {
    $numero = rand(0, 1);

    if ($numero == 1) {
        return true;
    } else {
        return false;
    }
}

for ($i = 1; $i <= 4; $i++) {
    if (isBitten()) {
        echo "Intent $i: M'ha mossegat el dit" . "\n";
    } else {
        echo "Intent $i: No m'ha mossegat el dit" . "\n";
    }
}

?>
</pre>
</div>
</div>

<hr>

<!-- NIVELL 2 -->
<h2>Nivell 2</h2>

<div class="contenedor">

  <!-- Exercici 1 -->
  <div>
  <h3>Exercici 1</h3>
  <pre>
<?php

function Trucada($minuts) {

    if ($minuts < 3) {
        $cost = 10;
    } else {
        $MesMinuts = $minuts - 3;
        $cost = 10 + ($MesMinuts * 5);
    }

    return "Aquesta trucada de $minuts minuts té un cost de $cost cèntims";
}

echo Trucada(2) . "\n";
echo Trucada(8) . "\n";
echo Trucada(14) . "\n";
?>

</pre>
</div>

 <!-- Exercici 2 -->
  <div>
  <h3>Exercici 2</h3>
  <pre>
 <?php

function Puntuacions($p1, $p2, $p3) {
    return $p1 + $p2 + $p3;
}

function media($p1, $p2, $p3) {
    $suma = Puntuacions($p1, $p2, $p3);
    return round($suma / 3);
}

function classificacio($punts) {
    if ($punts < 4000) {
        return "Principiant";
    } elseif ($punts < 8000) {
        return "Intermedi";
    } else {
        return "Professional";
    }
}

function Resultat($p1, $p2, $p3) {
    $suma = Puntuacions($p1, $p2, $p3);
    $mitjana = media($p1, $p2, $p3);

     echo "Puntuacions: $p1, $p2, $p3" . "\n";
     echo "Suma: $suma" . "\n";
     echo "Mitjana: $mitjana" . "\n";
     echo "Classificació joc 1: " . classificacio($p1) . "\n";
     echo "Classificació joc 2: " . classificacio($p2) . "\n";
     echo "Classificació joc 3: " . classificacio($p3) . "\n";
}

Resultat(1800, 9500, 5300);

?>
</pre>
</div>
</div>

</body>
</html>