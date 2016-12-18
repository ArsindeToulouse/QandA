<?php
namespace Core\Utils;

use Core\DB\ConnectDB;

trait PDO {

	protected $pdo = null;

	public function getPDO(){
		$db = ConnectDB::getInstance(HOST, DB, USER, PASS);
		$pdo = $db->getPDO();
		if (!is_object($pdo) || get_class($pdo) !== 'PDO') {
			return false;
		}
		return $pdo;
	}
}