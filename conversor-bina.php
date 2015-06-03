<?php
$numerO = $_POST['numero'];

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