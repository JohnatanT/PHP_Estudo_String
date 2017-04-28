<?php

//vai fazer uma String caber em determinado espaço

$nome = "Johnatan";
$novo = str_pad($nome,30," ",STR_PAD_RIGHT);
//str_pad(variavel,espaço a ser preenchido, o que colocar para preencher, para onde deve preencher);

//No exemplo: str_pad(Pega variavel $nome, usa-la em 30 espaços, preencher com espaços, preencher a direita);