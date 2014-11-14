<?php
function afficher_commentaire() {
	
	global $connexion;
	   try {
  			$select = $connexion -> prepare("SELECT * FROM minitp ORDER BY MINITP_ID ASC");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
    
    catch ( Exception $e ) {
	return false;
	}
}
?>