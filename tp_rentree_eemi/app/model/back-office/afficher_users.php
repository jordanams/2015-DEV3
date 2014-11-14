<?php
function afficher_users() {
		global $connexion;
		try {
  			$select = $connexion -> prepare("SELECT USER_ID, USER_LOGIN, USER_ADMIN FROM minitp_users");
			$select -> execute();
			$select -> setFetchMode(PDO::FETCH_NUM);
			$resultat = $select -> fetchAll();
			return $resultat;
		}
		
		catch (Exception $e) {
  		print $e->getMessage();
  		return false;
		}
	}
?>