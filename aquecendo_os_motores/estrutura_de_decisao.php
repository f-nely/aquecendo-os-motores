<?php 

$nome = 'Regis';
$media = 7.5;

if ($media >= 7) {
	echo 'Você está aprovado!';
} elseif ($media < 5) {
	echo 'Você está reprovado!';
} else {
	echo 'Você está de recuperação!';
}