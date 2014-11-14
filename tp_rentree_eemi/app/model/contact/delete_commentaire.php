<?php
function delete_commentaire($id) {
	
	global $connexion;
	try {
		$query = "DELETE FROM minitp WHERE MINITP_ID = :id";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':id', $id, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return true;
	}
	
	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}
?>