<?php

//Troca uma plavra de uma frase por outra


$frase = "Gosto de estudar Matematica";
$nova = str_replace("Matematica","PHP",$frase);
//str_replace("Palavra a ser trocada","Palavra que vai subtituir",$variavel);


//POde-se colocar str_ireplace para ignorar letras maiusculas e minusculas(ignoreCase)
echo $nova;