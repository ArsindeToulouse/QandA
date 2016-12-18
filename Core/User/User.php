<?php
namespace Core\User;

use Core\Utils\PDO;
/**
* 
*/
abstract class User {
	use PDO;

    protected $pdo =null;
    protected $id;

    /*public function __construct($pdo){
        $this->pdo = $pdo;
    }*/
}