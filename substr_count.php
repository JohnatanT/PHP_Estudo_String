<?php

//Mostra quantas vezes determinada palavra foi digitada



$frase = "Estou aprendendo PHP pelo curso de PHP báscio";
$cont = substr_count($frase,"PHP");
echo "A palavra PHP foi digitada: $cont vezes";
