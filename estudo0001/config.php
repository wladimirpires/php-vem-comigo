<?php

/* Titulo
   IF INLINE (Pesquise sobre)
   A variavel $titulo recebe a string "Português" se a variavel $lang for "pt"
   ou "Inglês" se a variável $lang for igual a "en" 
   Variável $lang recebe a variável $lang vinda da âncora (link)
   do index.php (linha 20)*/
$titulo =  ($lang == 'pt') ? 'Português' : 'Inglês';

/* Tradução dos labels
   IF INLINE (Pesquise sobre)
   A variavel $label_nome recebe a string "Nome:" se a variavel $lang for "pt"
   ou "Name:" se a variável $lang for igual a "en" 
   Variável $lang recebe a variável $lang vinda da âncora (link)
   do index.php (linha 20)*/
$label_nome = ($lang == 'pt') ? "Nome:" : "Name:";
$label_telefone = ($lang == 'pt') ? "Telefone:" : "Phone:";

// Registros
// declaração de variáveis com atribuição de valores 
$nome1="Wladimir Pires";
$tel1="+55 11 930624398";

?>