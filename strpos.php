<?php

//Vai verificar qual posição uma substring se encontra dentro de uma string(A palavra buscada tem que ser escrita como está na frase)

$frase = "Aprendendo PHP";
$pos = strpos($frase,"PHP");
echo "A frase : <br/> $frase</br> Esta na posição: $pos <br/>";



//Funcao stripos tem a mesma função da strpos, mas ela busca a plavra independente se é masiucula ou minuscula(ignoreCase) 

$fras = "Aprendendo PHP";
$posi = stripos($fras,"php");

echo "A posição foi: $posi";