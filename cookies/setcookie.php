<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>les cookies</title>
</head>
<body>
	
<?php 
if(!isset($_COOKIE['classe']))
{
	setcookie("classe","dees",time()+3600);
}
 ?>
<?php if (isset($_COOKIE['classe'])): ?>
	<?php echo "la classe est ".$_COOKIE['classe'] ?>
<?php endif ?>
</body>
</html>