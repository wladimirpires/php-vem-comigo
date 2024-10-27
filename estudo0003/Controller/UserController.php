<?php

Class UserController extends RenderView {

    public function list(){

        $usuario = New User();
        $lista = $usuario->list();

        $this->loadView('listagem', [
            'title' => 'SYS EMPRESA',
            'caminho' => $this->getCaminho(),
            'lista' => $lista
        ]);
    }

    public function showCadastro(){

        $this->loadView('cadastro', [
            'title' => 'SYS EMPRESA',
            'caminho' => $this->getCaminho()
        ]);
    }

    public function cadastro(){

        $usuario = new User();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setWhatsApp($_POST['whatsapp']);
        $usuario->cadastro($usuario);

        $this->showCadastro();
        
    }

    public function delete($id){

        $usuario = new User();
        $usuario->delete($id['0']);
        $this->list();
        
    }

    public function showUpdate($id){

        $usuario = new User();
        $lista = $usuario->showUpdate($id[0]);
        
        $this->loadView('update', [
            'title' => 'SYS EMPRESA',
            'caminho' => $this->getCaminho(),
            'nome' => $lista[0]['nome'],
            'email' => $lista[0]['email'],
            'whatsapp' => $lista[0]['whatsapp'],
            'id' => $lista[0]['id']
        ]);
    }

    public function update(){

        $usuario = new User();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setWhatsApp($_POST['whatsapp']);
        $usuario->setId($_POST['id']);
        $usuario->update($usuario);

        $this->list();
        
    }

}


?>