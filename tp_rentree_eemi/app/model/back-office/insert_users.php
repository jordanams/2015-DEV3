<?php
function insert_users($login, $password, $admin) {
	
	global $connexion;
	try {
		$query = "insert into minitp_users
					(USER_LOGIN, USER_PASSWORD, USER_ADMIN)
				values 
					(:login, :password, :admin)";
					
		$curseur = $connexion->prepare($query); 
		$curseur->bindValue(':login', $login, PDO::PARAM_STR);
		$curseur->bindValue(':password', $password, PDO::PARAM_STR);
		$curseur->bindValue(':admin', $admin, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();	
		return true;
	}

	catch ( Exception $e ) {
	die('Erreur Mysql : '.$e->getMessage());
	}
}
?>