<?php
include('../app/model/back-office/afficher_users.php');
$afficher_users = afficher_users();

	if(isset($_POST['login'])) {

		include('../app/model/back-office/insert_users.php');
		$insert = insert_users($_POST['login'], $_POST['password'], $_POST['admin']);

		if($insert = true) {
			 header('Location:index.php?module=back-office&action=index&insert_user_success=1');
		 }
	}

	if(isset($_GET['id'])) {
		
		include('../app/model/back-office/delete_users.php');
		$delete = delete_users($_GET['id']);

		if($delete = true) {
			header('location:index.php?module=back-office&delete_user=1');
		}
	}
$titre ="Back-Office";
include('../app/view/back-office/index.php'); 
?>