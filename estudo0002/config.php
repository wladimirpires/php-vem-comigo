<?php

/* Titulo
   IF INLINE (Pesquise sobre)
   A variavel $titulo recebe a string "Português" se a variavel $lang for "pt"
   ou "Inglês" se a variável $lang for igual a "en" 
   Variável $lang recebe a variável $lang vinda da âncora (link)
   do index.php (linha 20)*/
$titulo =  ($lang == 'pt') ? 'Lista de Clientes' : 'Customer List';

/* Tradução dos labels
   IF INLINE (Pesquise sobre)
   A variavel $label_nome recebe a string "Nome:" se a variavel $lang for "pt"
   ou "Name:" se a variável $lang for igual a "en" 
   Variável $lang recebe a variável $lang vinda da âncora (link)
   do index.php (linha 20)*/
$label_nome = ($lang == 'pt') ? "Nome:" : "Name:";
$label_telefone = ($lang == 'pt') ? "Telefone:" : "Phone:";
$label_email = ($lang == 'pt') ? "E-mail:" : "E-mail:";

// Registros
// declaração de variáveis com atribuição de valores 

$array = array(
         "cadastro" => array(
            "nome" => array( "Wladimir Alexandre", "Wlamir Alencar", "Marcelo Cavalcanti", "Renê Pires de Oliveira"),
            "telefone" => array( "11 930624398", "19 932453456","19 943458970", "14 33264657"),
            "email" => array("wlapo@hotmail.com", "wlamir@outlook.com", "bianchi@hotmail.com", "rene@gmail.com")     
        )
         );

?>
