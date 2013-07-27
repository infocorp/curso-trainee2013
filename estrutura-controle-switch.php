<?php

$a = 'Aula';

switch ($a) {
    // Se $a == 'Aula' executa o bloco abaixo
    case 'Aula':
        echo 'é uma aula';
    break;
    case 'Escola':
        echo 'se trata de uma escola';
    break;
    // Caso nenhum case seja verdadeiro, executa o bloco abaixo
    default:
        echo 'ação padrão';
    break;
}
