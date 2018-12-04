<html>
<head>
	<title>Kalkulator Sederhana</title>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<script LANGUAGE="JavaScript">
		function tambahkan(){
 			val = document.getElementsByName('nilai')[0].value;
  			document.getElementsByName('nilai')[0].value += "+";
		}
		function kurangi(){
 			val = document.getElementsByName('nilai')[0].value;
  			document.getElementsByName('nilai')[0].value += "-";
		}
		function kali(){
  			val = document.getElementsByName('nilai')[0].value;
  			document.getElementsByName('nilai')[0].value += "*";
		}
		function bagi(){
  			val = document.getElementsByName('nilai')[0].value;
  			document.getElementsByName('nilai')[0].value += "/";
		}
		function samadengan(){
  			val = document.getElementsByName('nilai')[0].value;
  			document.getElementsByName('hasil')[0].value = eval(val);
		}
	</script>
</head>
<body>
	<center>
<form id="myForm">
	<div class="container">
	<div class="ukuran">
	<center>
		<div class="text">
	<input type="text" id="number" class="number" name="nilai" >
		</div>
		<div class="button1">
	<input type="reset" name="clear" value="CLEAR" class="clear"/>
	<input type="text" id="hasil" class="hasil" name="hasil" value="">
		</div>
		<div class="button2">
	<input type="button" name="plus" class="b" value="+" onclick="tambahkan();"/>
	<input type="button" name="minus" class="b" value="-" onclick="kurangi();"/>
	<input type="button" name="bag" class="b" value=":" onclick="bagi();"/>
	<input type="button" name="kal" class="b" value="x" onclick="kali();"/>
	<input type="button" name="sama" class="b" value="=" onclick="samadengan();"/>
		</div>
	</center>
	</div>
</div>
</form>
</center>
</body>
</html>