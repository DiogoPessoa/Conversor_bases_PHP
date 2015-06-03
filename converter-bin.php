<?php
$numero = $_POST['numero'];

function converterBinParaOct($numero){	
	$arrayNumero = str_split($numero);
	$arrayNumero = array_reverse($arrayNumero);
	$partesArray = array_chunk($arrayNumero, 3);
	foreach($partesArray as $parte){
		echo "<br/> parte: ";
		foreach($parte as $p){
			echo $p;
		}
	}
}
?>/>

<html>
<head>
<meta charset="UTF-8">
<title>Número Convertido</title>
</head>
<body>
<label>Número: </label><?php echo $numero;?><br/>
<label>Partes Array:</label><br/><br/>

<?php converterBinParaOct($numero);?>

<br/><br/>
<button onclick="retornarForm();">Converter outro número</button>
<script type="text/javascript">
function retornarForm(){
	location.href="index-bin.php"
}
</script>
</body>
</html>