<?php
function insert_commentaire($nom, $mail, $comment) {

	global $connexion;
	try {
		$query = "insert into minitp
					(MINITP_NAME, MINITP_MAIL, MINITP_COMMENT)
				values 
					(:nom, :mail, :comment)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':nom', $nom, PDO::PARAM_STR);
		$curseur->bindValue(':mail', $mail, PDO::PARAM_STR);
		$curseur->bindValue(':comment', $comment, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}
?>