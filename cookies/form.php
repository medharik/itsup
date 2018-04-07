<?php 
extract($_GET);//$m
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>envoie de form</title>
</head>
<body>

	<?php if (isset($m) && $m=="no"): ?>
		tous les champs sont requis
	<?php endif ?>
	<form action="valider.php" method="post">
Email : <input type="email" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']?>">
Mot de passe : <input type="password" name="passe" value="<?php if(isset($_COOKIE['passe'])) echo $_COOKIE['passe']?>" >
		<input type="submit" value="valider">
	</form>

	
</body>
</html>