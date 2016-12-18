<?php
session_start();

require_once "start.php";
use Core\User\Admin;

if (isset($_POST['action'])) {
	if (!empty($_POST['login']) && !empty($_POST['pass'])) {
		//$user = new Admin($pdo);
		$user = new Admin();
		$id = $user->get($_POST['login'], $_POST['pass']);
		if ($id) {
			$_SESSION['user'] = $id;
			$_SESSION['sess'] = $_COOKIE['PHPSESSID'];
			header('Location: admin.php');
		}else{
			header('Location: login.php');
		}
	}
}

echo $twig->render('temp_login.tw');