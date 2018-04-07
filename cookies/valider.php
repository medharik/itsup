<?php 
extract($_POST);//$email,$passe
setcookie("email",$email,time()+3600*25);//enregistre un cookie email pendant 1 minute
setcookie("passe",$passe,time()+60);//enregistre un cookie email pendant 1 minute

if ((isset($email) && empty($email)) || (isset($passe) && empty($passe))) {
	header("location:form.php?m=no");
}


 ?>