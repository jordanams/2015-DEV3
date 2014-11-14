<?php include_once('../app/view/include/header.inc.php'); ?>

<div class="row">

		<div class="col-md-3 col-md-offset-3">
			<h2>Les commentaires</h2>
			<div class="comment">
				<ul class="list-unstyled panel-footer">
		        <?php foreach ($afficher_commentaire as $key => $com) {
		        	echo "<li>" . $com['MINITP_NAME'] . "</li>";
					echo "<li>" . $com['MINITP_COMMENT'] . "</li>";
					echo "<li><a href='mailto:" . $com['MINITP_MAIL'] . "'> ". $com['MINITP_MAIL'] . "</a>";
					if(isset($_SESSION['admin']))
					{
						if($_SESSION['admin'] == 1)
							{
								echo "<li><a href='index.php?module=contact&action=index&id=" . $com['MINITP_ID'] . "'>Supprimer</a></li>";
							}
					}
					echo"<br><br></li>"; } ?>
				</ul>
			</div>
		</div>

		<div class="col-md-4">
			<h2>Commentez !</h2>
			<form id="formu" name="formu" action="" method="POST">
				<div>Votre nom (*) : </div>
				<div>
					<input id="nom" name="nom" type="text" class="form-control input-md" size="30"  required  />
				</div>
				<div>Votre mail (*) : </div>
				<div>
					<input id="mail" name="mail" type="email" class="form-control input-md" size="30" required />
				</div>
				<div>Commentaire (*) : </div>
				<div>
					<textarea class="form-control comment" name="comment" rows="5" cols="40"  required ></textarea>
				</div>
				<div>(*) Obligatoire</div><br>
				<div>
					<input id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="Envoyer" />
				</div>
			</form>
		</div>

</div>

<?php include('../app/view/include/footer.inc.php'); ?>