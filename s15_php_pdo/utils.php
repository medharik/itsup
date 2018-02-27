<?php 
include_once("config.php");
function connecter()
{
	$connection=new PDO(DSN,USER,PASSE);
	return $connection;	
}
//fct d'ajout
function ajouterProduit($libelle,$prix,$qte){
//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("insert into produit (libelle,prix,qtestock) values(?,?,?)");
//envoie la rp
$rp->execute(array($libelle,$prix,$qte));
}
//ajouterProduit("hp", 8000, 1)
// fct de suppression
function supprimerProduit($id){
//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("delete from produit where id=?");

//envoie la rp
$rp->execute(array($id));
}
//supprimerProduit(1)
//fct de modification 
function modifierProduit($id, $new_libelle,$new_prix,$new_qte){
//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("update produit set libelle=?,prix=?,qtestock=? where id=?  ");
//envoie la rp
$rp->execute(array($new_libelle,$new_prix,$new_qte,$id));
}
//fct get
function get_all()
{//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("select * from produit order by libelle   ");
$rp->execute();
return ($rp->fetchAll(PDO::FETCH_ASSOC));	
}



 ?>