<?php

require_once "Conn.php";

class UserDao {

    public function create(User $u){

        $nome = $u->getNome();
        $email = $u->getEmail();
        $whatsapp = $u->getWhatsApp();

        $sql = "INSERT INTO usuario (nome, email, whatsapp) values ('$nome', '$email', '$whatsapp') ";
        $stmt = Conn::getConn()->prepare($sql);
        $stmt->execute();

    }

    public function read(){

        $sql = "SELECT * FROM usuario";
        $stmt = Conn::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);

    }

    public function showUpdate($id){

        $sql = "SELECT * FROM usuario where id = $id";
        $stmt = Conn::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);

    }

    public function update(User $u) {

        $nome = $u->getNome();
        $email = $u->getEmail();
        $whatsapp = $u->getWhatsApp();
        $id = $u->getId();
        $sql = "UPDATE usuario SET nome = '$nome', email = '$email', whatsapp = '$whatsapp' where id = '$id'";
        $stmt = Conn::getConn()->prepare($sql);
        $stmt->execute();

    }

    public function delete($id) {

        $sql = "DELETE FROM usuario where id = $id";
        $stmt = Conn::getConn()->prepare($sql);
        $stmt->execute();
        
    }

}

?>