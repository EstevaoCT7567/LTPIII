<?php
$idade = 0;

if ($idade>=18) {
    printf("Voce é maior de idade");
}else if($idade > 0 && $idade <18){
    printf("Voce não é maior de idade");
}else {
    printf("Idade inválida. Digite um idade válida");
}
