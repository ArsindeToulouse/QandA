<?php
require_once "start.php";
use Core\Task\Category;
use Core\Task\Question;
use Core\Task\Answer;

$categories = new Category();
$categoryRows = $categories->getListOfCategories();
$params = array(
		'categoryRows' => $categoryRows
	);
// если был передан массив данных через форму
if(!empty($_POST)){
	// если была выбрана категория
	// получаем название выбранной категории
	if (!empty($_POST['action'])) {
		foreach ($categoryRows as $row) {
			if (array_search($_POST['action'], $row)) {
				$params['categoryTitle'] = $row['title'];
				$catId = $row['id'];
			}
		}
		$question = new Question();
		$questions = $question->selectByCategoryAndStatus($catId, SHOW);
		//var_dump($questions);
		$params['questions'] = $questions;
	}
	// если заполнена форма вносим данные в таблицу
	if (!empty($_POST['q'])) {
		$formData = $_POST['q'];
		if (empty($formData['selectCategory'])) {
			$params['error'] = 'Необходимо выбрать категорию вопроса';
			$params['q'] = $formData;
		}else{
			$q = new Question();
			$id = $q->addNewQuestion($_POST['q']);
			$params['success'] = 'Ваш вопрос добавлен в список.';
		}
	}
}else{}
echo $twig->render('temp_qanda.tw', $params);