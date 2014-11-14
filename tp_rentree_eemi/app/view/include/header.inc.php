<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<title><?php echo $titre; ?></title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">

<div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?module=accueil&amp;action=index">MonExpo.com</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="menu">
    <!-- Button trigger modal -->
<?php
  if(!isset($_SESSION['login'])) {
  ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Connexion
        </button>
  <?php
}

else {
	echo"Bonjour <b>".$_SESSION['login']."</b>";
	echo"<br/><a href='index.php?module=accueil&amp;action=index&amp;deco=1'>Deconnexion</a>";
}
?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&amp;times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Connexion</h4>
      </div>

      <div class="modal-body">
        <form id="connect" method="get">
            <label>Login
              <input type="text" name="login" required />
            </label>
            <label>Mot de passe
              <input type="password" name="password" required />
            </label>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              <input type="submit" value="Connectez-vous" class="btn btn-primary" />
            </div>
        </form>
      </div>

    </div>
  </div>
  </div>
</div>


      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a id="lien1" href="index.php?module=accueil&amp;action=index">Accueil</a></li>
    			<li><a id="lien2" href="index.php?module=blog&amp;action=index">Blog</a></li>
    			<li><a id="lien3" href="index.php?module=photos&amp;action=index">Photos</a></li>
    			<li><a id="lien4" href="index.php?module=propos&amp;action=index">A propos</a></li>
    			<li><a id="lien5" href="index.php?module=contact&amp;action=index">Contact</a></li>
                <?php
						if(isset($_SESSION['admin']))
						{
						if($_SESSION['admin'] == 1)
						{
							 echo'<li><a id="lien6" href="index.php?module=back-office&amp;action=index">Back-office</a></li>';
						}
						}
				  ?>
        </ul>
      </div>

      <div id="aide">Aide contextuelle</div>

	   </div>

  <!-- NOTIFICATION -->
<?php

// CONNEXION
if(isset($_GET['login_success'])) {
  
  if($_GET['login_success'] == 0) {
	   echo '<div class="alert alert-danger" role="alert">Login/Mot de passe incorrect veuillez reessayer !</div>';
  }

  if($_GET['login_success'] == 1) {
	   echo '<div class="alert alert-success" role="alert">Vous êtes connecté</div>';
  }
}

//DECONNEXION
if(isset($_GET['logout'])) {
  
    if($_GET['logout'] == 1) {
  	   echo '<div class="alert alert-success" role="alert">Deconnexion réussie !</div>';
  }
}

// INSERTION DE COMMENTAIRE
if(isset($_GET['com_success'])) {

    if($_GET['com_success'] == 1) {
        echo '<div class="alert alert-success" role="alert">Votre commentaire a été publié</div>';
  }
}

// SUPPRESSION DE COMMENTAIRE
if(isset($_GET['delete'])) {

    if($_GET['delete'] == 1) {
        echo '<div class="alert alert-success" role="alert">Votre commentaire a été supprimé</div>';
  }
}

// INSERTION D'UTILISATEUR
if(isset($_GET['insert_user_success'])) {

    if($_GET['insert_user_success'] == 1) {
      echo '<div class="alert alert-success" role="alert">Utilisateur ajouté !</div>';
  }
}

//SUPPRESSION D'UTILISATEUR
if(isset($_GET['delete_user'])) {

    if($_GET['delete_user'] == 1) {
      echo '<div class="alert alert-success" role="alert">Utilisateur supprimé</div>';
  }
}
?>

<!-- BARRE DE DEBUG -->
<?php
if(isset($_SESSION['admin'])) {
  
    if($_SESSION['admin'] == 1) {
?>
<button class="btn btn-info btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Debug</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_SESSION >>>>>>>>>><br />";
	print_r($_SESSION);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_COOKIES >>>>>>>>>><br />";
	print_r($_COOKIE);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_POST >>>>>>>>>><br />";
	print_r($_POST);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<<<<<<<<<< Trace \$_GET >>>>>>>>>><br />";
	print_r($_GET);
	echo "<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>";
	echo "</pre>";
	  ?>
    </div>
  </div>
</div>
<?php
	}
}
?>
</nav>
<div class="container">