<?php
// Exercicio: recuperar string da textarea
// do formulario e colocar os itens separados
// por virgula dentro de um array.
// O codigo abaixo mostra o caminho
$arr = explode(',', 'item, item, item');
echo '<pre>';
print_r($arr);
echo '</pre>';