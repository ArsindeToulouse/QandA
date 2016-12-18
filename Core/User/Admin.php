<?php
namespace Core\User;

//use Core\Utils\PDO;
/**
* 
*/
class Admin extends User{
	//use PDO;

	private $login;
	private $privilege;
	
	/*function __construct($pdo){
		parent::__construct($pdo);
	}*/
	public function findeAll(){
		$stmt = $this->getPDO()->prepare("SELECT * FROM admins");
		if($stmt->execute()){
			return $stmt->fetchAll();
		}
		return [];
	}
	public function find(){
		$stmt = $this->getPDO()->prepare("SELECT id, name FROM admins");
		if($stmt->execute()){
			return $stmt->fetchAll();
		}
		return [];
	}
	public function get($login, $password){
		$stmt = $this->getPDO()->prepare("SELECT * FROM admins WHERE name = :login");
		if($stmt->execute(array(':login' => $login))){
			$row = $stmt->fetch();
			$result = (password_verify($password, $row['pass'])) ? $row['id'] : false;
		}else{
            $result = false;
        }
        return $result;
	}
	public function set($id){
		$this->id = $id;
		$stmt = $this->getPDO()->prepare("SELECT name, rights FROM admins WHERE id = :id");
		$stmt->execute(array(':id' => $id));
		$row = $stmt->fetch();
		$this->login = $row['name'];
		$this->privilege = $row['rights'];
	}
	public function add($userData){
		$stmt = $this->getPDO()->prepare("INSERT INTO admins (name, email, rights, pass) 
			VALUES (:name, :email, :rights, :pass)");
		$pass = password_hash($userData['pass'], PASSWORD_BCRYPT);
        $stmt->execute(array(':name' => $userData['login'], 
        	':email' => $userData['email'], 
        	':rights' => $userData['rights'], 
        	':pass' => $pass));
	}
	public function delete($id){
		$stmt = $this->getPDO()->prepare("DELETE FROM admins WHERE id = :id");
		$stmt->execute(array(':id' => $id));
	}
	public function changePass($id){
		$pass = self::getPass();
		$hashPass = password_hash($pass, PASSWORD_BCRYPT);
		$stmt = $this->getPDO()->prepare("UPDATE admins SET pass = :pass WHERE id = :id");
		$stmt->execute(array(':pass' => $hashPass, ':id' => $id));
		return $pass;
	}
	private static function getPass()	{
		$str = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
		$strLenght = strlen($str) - 1;
		$strGen = '';
		for($i = 0; $i < LENGTH; $i++) {
			$x = mt_rand(0, $strLenght);
			if($i != 0 ) {
				if($strGen[strlen($strGen) - 1] === $str[$x]) {
					$i--;
					continue;
				}
			}
			$strGen .= $str[$x];
		}
		return $strGen;
	}
}