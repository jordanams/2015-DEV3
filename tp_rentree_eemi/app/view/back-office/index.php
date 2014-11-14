<? include('../app/view/include/header.inc.php'); ?>

<div id="pagebk">
      <div>
	     <h3>Ajouter un utilisateur</h3>
            <form id="formu" name="formu2" action="" method="POST">

                  <div>Ajouter un login (*) : </div>
                  <div>
                        <input id="login" name="login" type="text" class="form-control input-md"  required  />
                  </div>
                  <div>Ajouter un password (*) : </div>
                  <div>
                        <input id="pass" name="password" type="password" class="form-control input-md" required />
                  </div>
                  <div>Admin : </div>
                  <div>
                        <select name="admin">
                        <option value="1" selected="selected">Oui</option>
                        <option value="0">Non</option>
                        </select>
                  </div>
                  <br/>
                  <div>
                        <input id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="Ajouter" />
                  </div>
            </form>
      </div>
      
      <br/>

      <div>
            <table id="tableau" class="table">

                  <tr>
                        <th height="40" width="110">ID</th>
                        <th height="40" width="110">Login</th>
                        <th height="40" width="110">Admin</th>
                        <th height="40" width="110">Supprimer</th>
                  </tr>

                  <?php foreach ($afficher_users as $key => $row) {
                              echo'<tr class="'; 
                              if( $row[2] == 1 )
                                    {
                                          echo"success";
                                    }
                              else
                                    {
                                          echo"warning";
                                    }
                              echo'">';
                              echo"<td>".$row[0]."</td>";
                              echo"<td>".$row[1]."</td>";
                              echo"<td>".$row[2]."</td>";
                              echo'<td><a href="index.php?module=back-office&action=index&id='.$row[0].'">Supprimer</a></td>';
                              echo"</tr>";        
                        }
                  ?>
            </table>
      </div>
</div>

<?php include('../app/view/include/footer.inc.php');?>