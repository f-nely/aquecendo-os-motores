<?php

$idade = 18;

echo $idade >= 18 ? 'Maior: ' : 'Menor';

$usuario = 'Regis';
$nome = $usuario ?? null;
echo $nome;