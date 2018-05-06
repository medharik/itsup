<?php 
define('DSN',"mysql:host=localhost;dbname=db2019;charset=utf8");
define('USER',"root");
define('PASSE',"");
 ?>
<?php 
function connecter()
{
	
	$connection=new PDO(DSN,USER,PASSE,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	return $connection;
}
// exemple $infos=array('libelle'=>'hp','prix'=>8000);
function ajouter($table,$infos){
$cnx=connecter();
//les keys
$keys_tab=array_keys($infos);// libelle,prix en tableau
$keys_chaine=join(',', $keys_tab);// libelle,prix
//les values
$values=array_values($infos);//array(hp, 8000)
// les ?
$intero_tab=array();
   for ($i = 0; $i <count($infos) ; $i++) {
   	$intero_tab[]='?';//on push (on ajouter des cases avec '?'), array('?','?')
   }
   $intero_chaine=join(',', $intero_tab);//?,?
//on facbrique le insert
   $insert="insert into $table ($keys_chaine) values ($intero_chaine)";

$rp=$cnx->prepare($insert);
//envoie la rp //insert into personne (libelle,prix,chemin) values(?,?,?)
$rp->execute($values);
}


// fct de suppression
function supprimer($id,$table){
try{
//connection à la db 

$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("delete from $table where id=?");
//envoie la rp
$rp->execute(array($id));
}catch(PDOException $erreur){
die("Erreur de suppression ".$erreur->getMessage());
}
}
//supprimerProduit(1)
//fct de modification 
function modifierProduit($id, $new_libelle,$new_prix,$new_chemin){
//connection à la db 
$cnx=connecter();
//préparer une requete 
//si chemin
if (isset($new_chemin)) {
	$rp=$cnx->prepare("update produit set libelle=?,prix=? , chemin=? 
		where id=?  ");
$rp->execute(array($new_libelle,$new_prix,$new_chemin,$id));

}else{
	$rp=$cnx->prepare("update produit set libelle=?,prix=?  where id=?  ");
$rp->execute(array($new_libelle,$new_prix,$id));

}
//envoie la rp
}
function modifier_categorie($id, $new_nom,$new_chemin,$categorie_id){
//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("update categorie set nom=?,chemin=?, categorie_id=? where id=?  ");
//envoie la rp
$rp->execute(array($new_nom,$new_chemin,$categorie_id,$id));
}
//fct get
function get_all($table)
{//connection à la db 

$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("select * from $table order by id desc  ");
$rp->execute();
return ($rp->fetchAll(PDO::FETCH_ASSOC));	
}

//fct get
function get_by_id($id,$table)
{//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("select * from $table where id=?  ");
$rp->execute(array($id));
return ($rp->fetch(PDO::FETCH_ASSOC));	
}
//fct get
function get_by($condition,$table)
{//connection à la db 
$cnx=connecter();
//préparer une requete 
$rp=$cnx->prepare("select * from $table where $condition  ");
$rp->execute(array());
return ($rp->fetchAll(PDO::FETCH_ASSOC));	
}

function  upload_file($infos)
{
	extract($infos);
$dossier="images";
$new_name=md5(date('Ymdhis').'-'.rand(0,999).$name);
$ext=pathinfo($name, PATHINFO_EXTENSION);
$chemin=$dossier.'/'.$new_name.'.'.$ext;
$autorise=array('png','jpg','jpeg','gif');
if(!in_array($ext,$autorise)){
	die("ce n'est pas une image");
}
if($size >1024*1024*1){
die("la taille max est 1Mo");
}
move_uploaded_file($tmp_name, $chemin);
return $chemin;
}

 ?>