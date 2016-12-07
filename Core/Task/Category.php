<?php
namespace Core\Task;
/**
* 
*/
class Category{

	private $pdo = null;
	private $categories = array();
	
	function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function getListOfCategories(){
		$sth = $this->pdo->prepare("SELECT * FROM categories");
        $sth->execute();
        return $sth->fetchAll();
	}
	public function getCategoryParams(){
		$sth = $this->pdo->prepare("SELECT id_category, qcount, q_wait, q_public, q_block FROM allparams");
        $sth->execute();
		return $sth->fetchAll();
	}
	public function add($category){
		$sth = $this->pdo->prepare("INSERT INTO categories (title) VALUES (:title)");
        $sth->execute(array(':title' => $category));
	}
	public function delete($id){
		$q = new Question($this->pdo);
		$q->deleteByCategory($id);
		$sth = $this->pdo->prepare("DELETE FROM categories WHERE id = :id");
        $sth->execute(array(':id' => $id));
	}
	public function getTitle($id){
		$sth = $this->pdo->prepare("SELECT title FROM categories WHERE id = :id");
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
	}
}