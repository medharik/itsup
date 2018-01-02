function recup(){
	a=document.getElementById('a') ;
	b=document.getElementById('b') ;
	r=document.getElementById('r') ;
if ( isNaN(a.value) || isNaN(b.value)   ) {
	alert("ce n'est pas un nombre");
	a.value=0;
	b.value=0;
	a.focus();
	a.select();
	};
}
function soustraire () {
	recup();
 	x=a.value - b.value ;
 	r.innerHTML=x ;
}
function multiplier () {
	recup();
 	x=a.value * b.value ;
 	r.innerHTML=x ;
}
function diviser () {
	recup();
 	x=a.value / b.value ;
 	r.innerHTML=x ;
}

function ajouter () {
	recup();
	//alert(a.value*1+b.value*1);
	
 	x= eval(a.value) + eval(b.value) ;//concatenation
 	r.innerHTML=x ;
}
function verifierN () {
	
}