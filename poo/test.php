<?php 
include_once 'produit.class.php';


$p1 = new Produit("hp",8000);
//var_dump($p1);
$p1->afficher();
$p2=new Produit("dell");
$p2->afficher();
/*$p1->_libelle="hp dv 6";
$this->_prix=-9000;*/
$p1->set_prix(9900);
echo $p1->get_libelle();
$p1->afficher();
 ?>