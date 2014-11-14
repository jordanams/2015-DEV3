<?php 
include('../app/model/contact/afficher_commentaire.php');
$afficher_commentaire = afficher_commentaire();

	if(isset($_POST['nom'])) {

		include('../app/model/contact/insert_commentaire.php');
		$insert = insert_commentaire($_POST['nom'], $_POST['mail'], $_POST['comment']);

		if($insert = true) {
			header('Location:index.php?module=contact&action=index&com_success=1');
		}
	}

	if(isset($_GET['id'])) {

		include('../app/model/contact/delete_commentaire.php');
		$delete = delete_commentaire($_GET['id']);

		if($delete = true) {
			header('location:index.php?module=contact&delete=1');
		}
	}
$titre ="Contact";
include('../app/view/contact/index.php');
?>