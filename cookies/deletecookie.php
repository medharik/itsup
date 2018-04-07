<?php 
if (isset($_COOKIE['classe'])) {
	setcookie("classe","",time());
}
echo count($_COOKIE);
 ?>