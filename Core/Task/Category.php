<?php
namespace Core\Task;

use Core\Utils\PDO;
/**
* 
*/
class Category{
	use PDO;

	//private $pdo = null;
	private $categories = array();
	
	/*function __construct($pdo){
		$this->pdo = $pdo;
	}*/

	public function getListOfCategories(){
		$sth = $this->getPDO()->prepare("SELECT * FROM categories");
        $sth->execute();
        return $sth->fetchAll();
	}
	public function getCategoryParams(){
		$sth = $this->getPDO()->prepare("SELECT id_category, qcount, q_wait, q_public, q_block FROM allparams");
        $sth->execute();
		return $sth->fetchAll();
	}
	public function add($category){
		$sth = $this->getPDO()->prepare("INSERT INTO categories (title) VALUES (:title)");
        $sth->execute(array(':title' => $category));
	}
	public function delete($id){
		$q = new Question($this->getPDO());
		$q->deleteByCategory($id);
		$sth = $this->getPDO()->prepare("DELETE FROM categories WHERE id = :id");
        $sth->execute(array(':id' => $id));
	}
	public function getTitle($id){
		$sth = $this->getPDO()->prepare("SELECT title FROM categories WHERE id = :id");
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
	}
}