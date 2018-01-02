function recup(){
	a=document.getElementById('a') ;
	b=document.getElementById('b') ;
	r=document.getElementById('r') ;
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