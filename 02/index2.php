<?php

$idade = 18;

echo ($idade >=18) 
? "Voce é menor de idade" : (($idade > 0 && $idade < 18) 
? "Voce é menor de idade" 
: "Iade invalida. Digite uma idade válida");