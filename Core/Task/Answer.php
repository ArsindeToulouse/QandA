<?php
namespace Core\Task;

use Core\Utils\PDO;
/**
* 
*/
class Answer{
	use PDO;

	/*private $pdo = null;
	
	function __construct(){
		$this->pdo = $this->getPDO();
	}*/
	public function getByQuestionId($id){
		$stmt = $this->getPDO()->prepare("SELECT id, id_user, a_text 
			FROM answers WHERE id_q=:id");
		$stmt->execute(array(':id' => $id));
		return $stmt->fetch();
	}
	public function updateText($id, $text, $author){
		$stmt = $this->getPDO()->prepare("UPDATE answers SET a_text = :text, id_user=:author WHERE id = :id");
		$stmt->execute(array(':text' => $text, ':author' => $author, ':id' => $id));
	}
	public function add($text, $author, $qId){
		$stmt = $this->getPDO()->prepare("INSERT INTO answers (id_q, a_text, id_user) VALUES (:qid, :atext, :iduser)");
        $stmt->execute(array(':qid' => $qId, ':atext' => $text, ':iduser' => $author));
	}
}