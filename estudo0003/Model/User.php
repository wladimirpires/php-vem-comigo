<?php

require_once "DAO/UserDao.php";


class User {

    private $id, $nome, $email, $whatsapp;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getWhatsApp(){
        return $this->whatsapp;
    }

    public function setWhatsApp($whatsapp){
        $this->whatsapp = $whatsapp;
    }

    public function cadastro(User $usuario){

        $userCad = new UserDao();
        $userCad->create($usuario);

    }

    public function delete($id){

        $userCad = new UserDao();
        $userCad->delete($id);

    }

    public function list(){

        $userCad = new UserDao();
        return $userCad->read();

    }

    public function showUpdate($id){

        $userUpdate = new UserDao();
        return $userUpdate->showUpdate($id);

    }

    public function update(User $u){

        $userUpdate = new UserDao();
        $userUpdate->update($u);

    }


}

?>
