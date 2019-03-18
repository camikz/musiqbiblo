<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>

<body>
	<h2 id="titreinscription">Création de compte</h2>
	<form name="comment" method="post" action="Insc_Traitement.php" id="form">
		<fieldset>
			<p>
				<select name="civ" id="civ">
					<option value="H">M.</option>
					<option value="F">Mme</option>
				</select>
			</p>
			
			<p>
				<input type="text" name="log" id="log" placeholder="Login" required size=35>
			</p>
			<p>
				<input type="password" name="pwd" id="pwd" placeholder="Mot de passe" required size=35>
			</p>
			<p>
				<input type="password" name="rpwd" id="rpwd" placeholder="Répéter le mot de passe" required size=35>
			</p>
			<p>
				<input type="email" name="mail" id="mail" placeholder="Mail" required size=35>
			</p>
			<p>
				<input type="submit" id="submit" name="submit" value="Envoyer">
			</p>
		</fieldset>
	</form>
</body>
</html>