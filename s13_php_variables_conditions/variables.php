<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>les variables php</title>

</head>
<body>
	<?php 
$nom="alami";
var_dump($nom);
$prenom='ali';
$age=19;
$age_ali=$age;//affectation passage par valeur
var_dump($age);
$tel="065698090";
$nomcomplet='$nom $prenom';
$date=date('d-m-Y');
echo "age de ali est : $age_ali ans";

	 ?>
<br>
<?php 
echo $nomcomplet;

 ?>
<br>
<?php 

echo "<h3>mon nom est $nom, mon prénom est $prenom, mon age est $age ans</h3>";
echo '<h3>mon nom est $nom, mon prénom est $prenom, mon age est $age ans</h3>';
echo '<h3>mon nom est '.$nom.'
, mon prénom est '.$prenom.', mon age est '.$age.' ans</h3>';//concaténation 
 ?>
 <br>
<h2>
<?php echo 'la date est '.$date ?>
</h2>
<?php 
$a=10;
$b=$a;// par valeur
$c=&$a;//par adresse 
$a=100;
$c=400;
echo "a = $a, b= $b, c= $c";
echo '<br>a = '.$a.' b = '.$b.' c = '.$c;
 ?>

</body>
</html>