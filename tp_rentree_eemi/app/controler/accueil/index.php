<?php
include('../app/model/accueil/login.php');

	if(isset($_GET['login'])) {
		$verif_login = verif_user($_GET['login'], $_GET['password']);
	}

	if(isset($_GET['deco'])) {
		session_start();
		session_destroy();
		header('location:index.php?module=accueil&action=index&logout=1');
		exit;
	}
$titre ="Accueil";
include('../app/view/accueil/index.php'); 
?>