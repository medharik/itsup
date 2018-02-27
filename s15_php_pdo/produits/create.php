<?php 
include_once("../config.php");
include_once '../utils.php';
extract($_POST);
ajouterProduit($libelle, $prix, 0);
header("location:nouveau.php?add=sucess");

 ?>