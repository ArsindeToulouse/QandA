<?php
namespace Core\User;

//use Core\Utils\PDO;
/**
* 
*/
class Person extends User {
    //use PDO;

	/*function __construct($pdo){
		parent::__construct($pdo);
	}*/
    public function addNewUser($name, $email){
        $sth = $this->getPDO()->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $sth->execute(array(':name' => $name, ':email' => $email));
        $id = $this->getPDO()->lastInsertId();
        return $id;
    }
    public function getUserID($name, $email){
        $sth = $this->getPDO()->prepare("SELECT id FROM users WHERE email = :email");
        $sth->execute(array(':email' => $email));
        $result = $sth->fetch();
        if($result){
            return $result['id'];
        }else{
            return $this->addNewUser($name, $email);
        }
    }
}