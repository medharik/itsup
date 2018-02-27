<?php extract($_GET) ;?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>nouveau produit</title>
</head>
<body>
<?php if (isset($add)): ?>
	produit ajouté avec succès
<?php endif ?>

<form action="create.php" method="post">
	<table align="center">
		<tr>
			<td>Libellé</td>
			<td><input type="text" name="libelle"></td>
		</tr>
		<tr>
			<td>Prix</td>
			<td><input type="text" name="prix"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Ajouter"></td>
		</tr>
	</table>
</form>
</body>
</html>