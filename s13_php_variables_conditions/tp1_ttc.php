<style type="text/css">
.erreur{
	background: red;
}

</style>
<?php 

$prix=1000;
$tva=-20;
$quantité=10;
$tht=$prix*$quantité;
$ttc=$tht*(1+$tva/100);
if ($tva<0) {
$sara="erreur";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>tht</td>
			<td><?php echo $tht ?> </td>
		</tr>
	<tr> 
		<td>tva</td>
			<td class="<?php echo $sara; ?>"><?php echo $tva ?> </td>
		</tr>
	<tr>
		<td>ttc</td>
			<td><?php echo $ttc ?> </td>
		</tr>	

	</table>

</body>
</html>