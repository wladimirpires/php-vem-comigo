<?php

class HomeController extends RenderView {

    public function index(){

        $this->loadView('home', [
            'title' => 'SYS EMPRESA',
            'caminho' => '/curso-php/estudo0003',
        ]);
    }
}

?>