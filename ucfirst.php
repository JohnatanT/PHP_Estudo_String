<?php

//Coloca a primeira letra em maiusculo, e deixa todas as outras letras como estão

$nome = "francisco Johnatan Tavares Cavalcante";
$nome2 = ucfirst($nome);
echo "Meu nome é: $nome2";


//POdemos fazer assim também
$nome3 = "francisco Johnatan Tavares Cavalcante";
/* Estou deixando tudo em minusculo comn o strtolower e depois deixando a primeira letra em maiusculo*/
$nome4 = ucfirst(strtolower($nome3));
echo "Meu nome é: $nome4";