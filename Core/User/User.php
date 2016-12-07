<?php
namespace Core\User;
/**
* 
*/
abstract class User {

    protected $pdo =null;
    protected $id;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
}