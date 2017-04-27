<?php

//Quebra de linhas no meu código

$txt = "Este é um exemplo de String gigante que será exibida para o exemplo com a função worwrap";
$red = wordwrap($txt,"<br>\n",false);
//br --> Qubra de linha visualmente
//\  --> Quebra de linhas no meu código
//False  --> Quebra de linhas por palavra
echo ($res);



?>
