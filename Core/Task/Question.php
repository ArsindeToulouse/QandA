<?php
namespace Core\Task;
use Core\User\Person;
use Core\Utils\PDO;
/**
* 
*/
class Question{
	use PDO;

	/*private $pdo = null;
	
	function __construct($pdo){
		$this->pdo = $pdo;
	}*/
	public function addNewQuestion($questionParams){
		$user = new Person($this->getPDO());
		$userID = $user->getUserID($questionParams['name'], $questionParams['email']);
		$dt = date("Y-m-d H:i:s", time());
        $stmt = $this->getPDO()->prepare("INSERT INTO questions (q_text, id_user, id_category, q_date) VALUES (:qtext, :iduser, :idcategory, :qdate)");
        $stmt->execute(array(':qtext' => $questionParams['questionText'], ':iduser' => $userID, ':idcategory' => $questionParams['selectCategory'], ':qdate' => $dt));
        $id = $this->getPDO()->lastInsertId();
        return $id;
	}
	public function deleteByCategory($catID){
		$stmt = $this->getPDO()->prepare("DELETE FROM questions WHERE id_category = :id");
        $stmt->execute(array(':id' => $catID));
	}
	public function selectByCategoryAndStatus($catID, $status){
		$stmt = $this->getPDO()->prepare("SELECT questions.q_text, answers.a_text 
			FROM questions, answers 
			WHERE questions.id=answers.id_q AND questions.status=:status AND questions.id_category=:catid");
        $stmt->execute(array(':catid' => $catID, 'status' => $status));
        return $stmt->fetchAll();
	}
	public function selectByStatus($status){
		$stmt = $this->getPDO()->prepare("SELECT questions.id, questions.q_text, categories.title, questions.q_date
			FROM questions, categories WHERE status=:status AND questions.id_category=categories.id 
			ORDER BY q_date DESC");
        $stmt->execute(array('status' => $status));
        return $stmt->fetchAll();
	}
	public function delete($id){
		$stmt = $this->getPDO()->prepare("DELETE FROM questions WHERE id = :id");
        $stmt->execute(array(':id' => $id));
	}
	public function editStatus($id, $status){
		$stmt = $this->getPDO()->prepare("UPDATE questions SET status = :status WHERE id = :id");
		$stmt->execute(array(':status' => $status, ':id' => $id));
	}
	public function get($id){
		$stmt = $this->getPDO()->prepare("SELECT questions.id as qid, questions.q_text, users.id as user, answers.id as aid, answers.a_text 
			FROM questions, users, answers 
			WHERE questions.id=answers.id_q AND users.id=questions.id_user AND questions.id=:id");
		$stmt->execute(array(':id' => $id));
		return $stmt->fetch();
	}
	public function select($id){
		$stmt = $this->getPDO()->prepare("SELECT id, q_text, id_user, q_date, status FROM questions WHERE id_category=:id_cat");
        $stmt->execute(array(':id_cat' => $id));
		return self::statusToString($stmt->fetchAll());
	}
	protected static function statusToString($rows){
		$newRows = $rows;
		foreach ($rows as $index => $row) {
			switch ($row['status']) {
				case 0:
					$newRows[$index]['status'] = 'ожидает ответа';
					break;
				case 1:
					$newRows[$index]['status'] = 'опубликован';
					break;
				case 2:
					$newRows[$index]['status'] = 'скрыт';
					break;
			}
		}
		return $newRows;
	}
	public function updateText($id, $text){
		$stmt = $this->getPDO()->prepare("UPDATE questions SET q_text = :text WHERE id = :id");
		$stmt->execute(array(':text' => $text, ':id' => $id));
	}
}