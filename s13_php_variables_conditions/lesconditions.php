<style type="text/css">
.majeur{
color: blue;
}	
.mineur{
color: pink;
}
.rouge{
	background: red;
}
.vert{
	background: green;
}
</style>
<?php 
$hf="femme";
$age=19;
$nom='alami';
$prenom="mourad";
$majorite=""; 

if ($age > 18) {
	$majorite="majeur";
	$class="majeur";
}else{
		$majorite="mineur";
		$class="mineur";
}
if ($hf=='homme') {
	$style='rouge';
} else {
	$style='vert';
}


echo "<h2>$nom $prenom est $majorite</h2>";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="<?php echo $style; ?>">
<h2><?php echo $nom; ?> <?php echo $prenom ?> est <?php echo $majorite ?></h2>

<h3 class="<?php echo $class; ?>" >votre age est <?php echo $age; ?></h3>
</body>
</html>

