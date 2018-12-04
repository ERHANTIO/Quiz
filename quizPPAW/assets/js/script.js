function tambahkan(){
	x=eval(form.angka1.value);
	y=eval(form.angka2.value);
	z=x+y

	form.hasil.value= z;
}
function kurangi(){
	var x = parseInt(document.getElementById("number").value);
	var y = parseInt(document.getElementById("number2").value);
	var z = x-y;

	document.getElementById("hasil").innerHTML=z;
}
function bagi(){
	var x = parseInt(document.getElementById("number").value);
	var y = parseInt(document.getElementById("number2").value);
	var z = x/y;

	document.getElementById("hasil").innerHTML=z;
}
function kali(){
	var x = parseInt(document.getElementById("number").value);
	var y = parseInt(document.getElementById("number2").value);
	var z = x*y;

	document.getElementById("hasil").innerHTML=z;
}
