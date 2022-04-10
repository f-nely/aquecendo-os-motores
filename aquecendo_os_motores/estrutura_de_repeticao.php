<?php

$n = 4;

for ($i = 0; $i <= 10; $i++) {
	echo "$n x $i = " . $n * $i . PHP_EOL;
}

$cars = ['Jetta', 'Amarok', 'S10', 'Cronos'];

foreach ($cars as $car) {
	echo $car . PHP_EOL;
}

echo PHP_EOL;

$nomes = ['Regis', 'Michele', 'Catarina', 'Andreia'];

for ($i = 0; $i < count($nomes); $i++) {
	echo $nomes[$i] . PHP_EOL;
}

echo PHP_EOL;

foreach ($nomes as $nome) {
	echo $nome . "\n";
}

echo PHP_EOL;

$j = 0;

while ($j <= 10) {
	echo $j . "\n";
	$j++;
}

$x = 0;

while ($x <= 5) {
	echo "olá mundo! \n";
	$x++;
}