/***************************************************************
Envoi du formulaire
Vérifier les 3 champs
***************************************************************/
document.getElementById("formu").onsubmit = function () 
{
	if (document.formu.nom.value == "") 
	{
		alert("Nom obligatoire !");
		return false;
	}
	else if(isEmail(document.formu.mail.value) == false) 
	{
		alert("Mail obligatoire !");
		return false;
	}
	else if(document.formu.comment.value == "") 
	{
		alert("Commentaire obligatoire !");
		return false;
	}
	else return true;
}
