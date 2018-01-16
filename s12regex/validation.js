var message="";

function validerEmail() {
var email  = document.getElementById('email');
var modele =/^[a-z]{1,}[a-z0-9_.]{0,}@ecole\.ma$/
if (! modele.test(email.value)) {
	message  +="<h4>email non valide</h4>";
	
}
}
function validerPasse() {
var passe  = document.getElementById('passe');
var modele =/[a-z]{4,}[0-9]{4,}/
if (! modele.test(passe.value)) {
	message += "<h4>le mot de passe non valide </h4>";
}
}

function validerCin() {
var cin  = document.getElementById('cin');
var modele =/^[a-z]{1,2}[0-9]{6}$/
if (! modele.test(cin.value)) {
	message +="cin non valide <br>";
}
}

function validerConf() {
var conf  = document.getElementById('conf');
var passe  = document.getElementById('passe');


if (conf.value != passe.value) {
	message += "<h4>les 2 mots passe de correspondent pas  </h4>";
}
}

function validerSexe(){
homme=document.getElementById('homme');
femme=document.getElementById('femme');
f=document.getElementById('f');
if ( !homme.checked && !femme.checked){
message +="champ  sexe obligatoire";
}
if(homme.checked){
f.style.backgroundColor='blue';
f.style.color="white";
}else{
f.style.backgroundColor='pink';

}
}


function valider() {
erreur=	document.getElementById('erreur');
	validerEmail();
	validerPasse();
	validerConf();
	validerCin();
	validerSexe();
erreur.innerHTML=message;
message =""
}