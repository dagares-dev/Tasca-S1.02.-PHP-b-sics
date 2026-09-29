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

</div>

</body>
</html>