<?php

$arr = [
	'escova de dente',
	'sabonete',
	'toalha',
	'comida' => [
		'arroz',
		'feijão',
	]
];
echo '<pre>';
print_r($arr);
echo $arr['comida'][0];