<?php
$numero = $_POST['numero'];

function converteBaseBin($numero){
	$baseBin = array();
	while($numero>=2){
		$restoDivisao = $numero % 2;
		$numero = $numero / 2;
		$numero = (int) $numero;
		array_push($baseBin, $restoDivisao);
	}
	array_push($baseBin, 1);
	$baseBin = array_reverse($baseBin);
	$numeroBinario = "";
	foreach($baseBin as $num){
		$numeroBinario .= $num;
	}
	return $numeroBinario;
}

function converteBaseOct($numero){
	$baseOct = array();
	while($numero>=8){
		$restoDivisao = $numero % 8;
		$numero = $numero / 8;
		$numero = (int) $numero;
		array_push($baseOct, $restoDivisao);
	}
	array_push($baseOct, $numero);
	$baseOct = array_reverse($baseOct);
	$numeroOct = "";
	foreach($baseOct as $num){
		$numeroOct .= $num;
	}
	return $numeroOct;
}

function converteBaseHex($numero){
	$baseHex = array();
	while($numero>=16){
		$restoDivisao = $numero % 16;
		$numero = $numero / 16;
		$numero = (int) $numero;
		array_push($baseHex, $restoDivisao);
	}
	array_push($baseHex, $numero);
	$baseHex = array_reverse($baseHex);
	$numeroHex = "";
	foreach($baseHex as $num){
		switch($num){
			case 10:
				$num = "A";
				break;
			case 11:
				$num = "B";
				break;
			case 12:
				$num = "C";
				break;
			case 13:
				$num = "D";
				break;
			case 14:
				$num = "E";
				break;
			case 15:
				$num = "F";
				break;
		}
		$numeroHex .= $num;
	}
	return $numeroHex;
}
?>

<html>
<head>
<meta charset="UTF-8">
<title>Número Convertido</title>
</head>
<body>

<label>Número (Base 10): </label><?php echo $numero;?><br/>
<label>Base 2: </label><?php echo converteBaseBin($numero);?><br/>
<label>Base 8: </label><?php echo converteBaseOct($numero);?><br/>
<label>Base 16: </label><?php echo converteBaseHex($numero);?><br/>
<br/><br/>
<button onclick="retornarForm();">Converter outro número</button>
<script type="text/javascript">
function retornarForm(){
	location.href="index.php"
}
</script>
</body>
</html>