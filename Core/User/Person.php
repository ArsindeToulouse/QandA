<?php
namespace Core\User;
/**
* 
*/
class Person extends User {

	function __construct($pdo){
		parent::__construct($pdo);
	}
    public function addNewUser($name, $email){
        $sth = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $sth->execute(array(':name' => $name, ':email' => $email));
        $id = $this->pdo->lastInsertId();
        return $id;
    }
    public function getUserID($name, $email){
        $sth = $this->pdo->prepare("SELECT id FROM users WHERE email = :email");
        $sth->execute(array(':email' => $email));
        $result = $sth->fetch();
        if($result){
            return $result['id'];
        }else{
            return $this->addNewUser($name, $email);
        }
    }
}