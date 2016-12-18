<?php
session_start();
require_once "start.php";
use Core\User\Admin;
use Core\Task\Category;
use Core\Task\Question;
use Core\Task\Answer;
use Core\Utils\Utils;
/*
echo "<pre>";
//print_r($_GET);
print_r($_POST);
echo "</pre>";
*/

/*
 * Проверяем, авторизован ли пользователь.
 * Есои нет, возвращаем его на страницу авторизации.
 */
if (empty($_SESSION) || $_SESSION['sess'] !== $_COOKIE['PHPSESSID']) {
	header('Location: login.php');
	die();
}
/*
 * Проверяем, выбран ли корректрый пункт меню на странице администратора.
 * Есои нет, остаемся на месте.
 */
if (empty($_GET)){ 
	echo $twig->render('temp_index.tw');
	die();
}
/*
 * Переход на страницу редактирования пользователей(администраторов) системы.
 */
if ($_GET['page'] === 'admin') {
	$post = $_POST;
	$id = $_SESSION['user'];
	//$user = new Admin($pdo);
	$user = new Admin();
	$user->set($id);

	if (Utils::checkPostSubmit($post, $user)) {
		header('Location: admin.php?page=admin');
    	die();
	}
	if (Utils::checkPostSubmitFormAdd($post)) {
		$params['addForm'] = true;
	}
	if (Utils::checkPostSubmitFormChange($post)) {
		$pass = $user->changePass($post['submit_form']['change']);
		$params['changeForm'] = true;
		$params['changePass'] = $pass;
	}

	$rows = $user->findeAll();
	
	$params['rows'] = $rows;
	echo $twig->render('temp_admin.tw', $params);
}
/*
 * Переход на страницу редактирования вопросов и ответов.
 */
if ($_GET['page'] === 'content') {
	$user = new Admin();
	$cat = new Category();
	$categories =$cat->getListOfCategories();
	$question = new Question();
	$answer = new Answer();
	// переключение между закладками на странице работы с вопросами и ответами
	$tabView = (!empty($_GET['tab'])) ? (($_GET['tab'] === 'categoryTab') ? 'categoryTab' : 'questionsTab') : 'statisticTab';

	if (!empty($_GET['catid'])) {
		$params['categoryTitle'] = $cat->getTitle($_GET['catid'])['title'];
		$params['categoryID'] = $_GET['catid'];
		$params['questions'] = $question->select($_GET['catid']);
	}
	// создать новую тему(категорию)
	if (!empty($_POST['submit_new_category']) && $_POST['submit_new_category'] === 'new') {
		$cat->add($_POST['new_category']);
		header('Location: admin.php?page=content&tab=categoryTab');
    	die();
	}
	// удалить тему(категорию)
	if (!empty($_POST['submit_delete_category']) && $_POST['submit_delete_category'] === 'delete') {
		$cat->delete($_POST['select_category']);
		header('Location: admin.php?page=content&tab=categoryTab');
    	die();
	}
	// показать содержимое темы(категории)
	if (!empty($_POST['submit_view_category']) && $_POST['submit_view_category'] === 'view') {
		$catID = $_POST['select_category'];
		$result = array_filter($categories, function($innerArray){
		    global $catID;
		    return ($innerArray['id'] == $catID); //Поиск по первому значению
		});
		$tabView = 'categoryTab';
		$params['categoryTitle'] = array_shift($result)['title'];
		$params['categoryID'] = $catID;
		$params['questions'] = $question->select($catID);
	}
	if (!empty($_POST['qaction'])) {
		$actions = $_POST['qaction'];

		switch ($actions) {
			case isset($actions['delete']):
				$question->delete($actions['delete']);
				break;
			case isset($actions['hide']):
				$question->editStatus($actions['hide'], HIDE);
				break;
			case isset($actions['show']):
				$question->editStatus($actions['show'], SHOW);
				break;
			case isset($actions['edit']):
				$editRow = $answer->getByQuestionId($actions['edit']);
				$params['authors'] = $user->find();
				$params['answerData'] = $editRow;
				$params['editID'] = $actions['edit'];
				break;
			case isset($actions['submit_edit']):
				$question->updateText($_POST['question_id'], $_POST['question_edit_text']);
				(empty($_POST['answer_id'])) ? $answer->add($_POST['answer_edit_text'], $_POST['select_author'], $_POST['question_id']) : $answer->updateText($_POST['answer_id'], $_POST['answer_edit_text'], $_POST['select_author']);
				header("Location: admin.php?page=content&tab=categoryTab&catid={$_POST['cat_id']}");
	        	die();
				break;
			case isset($actions['reset_edit']):
				header("Location: admin.php?page=content&tab=categoryTab&catid={$_POST['cat_id']}");
	        	die();
				break;
			default:
				break;
		}

    	$tabView = 'categoryTab';
    	$params['categoryTitle'] = $_POST['cat_title'];
		$params['categoryID'] = $_POST['cat_id'];
		$params['questions'] = $question->select($_POST['cat_id']);
	}

	if (!empty($_POST['qwaction'])) {
		$actions = $_POST['qwaction'];

		switch ($actions) {
			case isset($actions['delete']):
				header("Location: admin.php?page=content&tab=questionsTab");
	        	die();
				break;
			case isset($actions['edit']):
				$params['authors'] = $user->find();
				$params['qwEditID'] = $actions['edit'];
				break;
			case isset($actions['submit_edit']):
				$question->editStatus($_POST['question_id'], $_POST['select_status']);
				$answer->add($_POST['answer_edit_text'], $_POST['select_author'], $_POST['question_id']);
				header("Location: admin.php?page=content&tab=questionsTab");
	        	die();
				break;
			case isset($actions['reset_edit']):
				header("Location: admin.php?page=content&tab=questionsTab");
	        	die();
				break;
			default:
				break;
		}

    	$tabView = 'questionsTab';
	}

	$params['questionsWait'] = $question->selectByStatus(WAIT);
	// формируем список тем
	$catParams = $cat->getCategoryParams();
	$allParams = [];
	foreach ($categories as $category) {
		foreach ($catParams as $param) {
			if ($category['id'] === $param['id_category']) {
				$allParams[] = array_merge($category, $param);
				break;
			}
		}
	}
	$params['categories'] = $categories;
	$params['allParams'] = $allParams;
	$params[$tabView] = 'active';
	echo $twig->render('temp_content.tw', $params);
}
