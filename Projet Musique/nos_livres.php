<!DOCTYPE HTML>

<html>

<?php include("head.php"); ?>

	<body>
	
	<?php include("header.php"); ?>

	<div id="recherche">
			
	</div>

	<table class="avectri" id="livre">
		<thead>
			<tr>
				<th>titre</th>
				<th>Chanteur</th>
				<th>genres</th>
				<th>Production</th>
				<th><Durée/th>
				<th>dispo</th>
			</tr>
		</thead>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";

		try
		{
			$bdd=new PDO("mysql:host=".$servername.";dbname=orange;charset=utf8",$username,$password);
		}
		catch(Exception $e)
		{
			die("erreur:".$e->getMessage());
		}
		
		$reponse = $bdd->query('SELECT * FROM livres');?>
		<tbody>
			<?php while ($donnees = $reponse->fetch()) {
			?>
			<tr>
				<td><?php echo $donnees['livre_titre'];?></td>
				<td><?php echo $donnees['livre_auteur'];?></td>
				<td><?php echo $donnees['livre_genre'];?></td>
				<td><?php echo $donnees['livre_editeur'];?></td>
				<td><?php echo $donnees['livre_isbn'];?></td>
				<td><?php echo $donnees['livre_dispo'];?></td>
			</tr>
			<?php
			}
			$reponse->closeCursor();
			?>

		</tbody>
	</table>
	
	
	
	</body>

	<?php
		include 'Footer.html';
	?>

</html>