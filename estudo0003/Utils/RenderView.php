<?php

class RenderView{

    private $caminho;

    public function getCaminho(){
        return "/curso-php/estudo0003";
    }

    public function loadView($view, $args){
        
        extract($args);

        require_once __DIR__."/../View/$view.php";
    }
}

?>