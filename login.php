<?php
session_start();

require_once "start.php";
use Core\User\Admin;

if (isset($_POST['action'])) {
	if (!empty($_POST['login']) && !empty($_POST['pass'])) {
		$user = new Admin($pdo);
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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вопроы и ответы</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/qanda.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<!-- верхний колонтитул -->
		<header class="row header">
			<div class="logo">Вопросы и ответы...</div>
		</header>
		<section id="content" class="content">
			<div class="row">
				<form enctype="multipart/form-data" action="login.php" method="post" class="col s6 form-container">
				<div class="row">
					<div class="input-field col s12">
						<input id="login" type="text" class="validate" name="login">
						<label for="login">Login</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="pass">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<button class="btn waves-effect waves-light amber darken-2" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>
				</form>
          	</div>
		</section>
		<!-- нижний колонтитул -->
		<footer class="footer">
			<div class="copyright">"Гениальные мысли" @ 2016</div>
		</footer>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $( document ).ready(function(){
          $(".button-collapse").sideNav();
        })
      </script>
</body>
</html>