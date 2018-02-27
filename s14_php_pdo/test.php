<?php 
include_once 'utils.php';
//ajouterProduit("dell centrino", 9000, 10);
//supprimerProduit(5);
//modifierProduit(4, "dell satelite", 9000, 9);
$data=get_all();
 $produit1=$data[0];
 echo $produit1['prix'];
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>liste des produits</title>
</head>
<body>
<table align="center" border="1">
	<tr>
		<th>Libellé</th>
		<th>Prix</th>
		<th>Quantité en stock</th>	
	</tr>
	<?php foreach ($data as  $produit): ?>
		<tr>
		<td><?php echo $produit['libelle']; ?></td>
		<td><?php echo $produit['prix']; ?></td>
		<td><?php echo $produit['qtestock']; ?></td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>