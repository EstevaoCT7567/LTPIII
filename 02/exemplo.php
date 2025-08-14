<?php /* ... */

$n = rand(0,100);

if ($n > 50) {
    echo 'O número é maior que 50!';
} else {
    echo 'O número é menor que 50!';
}

//Utilizando o operador ternário ficaria:

echo ($n > 50) ? 'O número é maior que 50!' : 'O número é menor que 50!';

//O leitor Gustavo Rafael sugeriu uma forma mais simplificada:
echo 'O número é ' . (($n > 50) ? 'maior' : 'menor') . ' que 50!';