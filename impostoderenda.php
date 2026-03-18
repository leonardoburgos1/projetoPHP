<?php 
	
	$sal = 3500;

	function impostoRenda($pct, $sal) {
		$imposto = $sal * $pct / 100;
		$sali = $sal - $imposto;
		printf("Salário bruto: R$%.2f <br/>
				Porcetagem de desconto: %.1f%%<br/>
				Valor do desconto: R$%.2f <br/>
				Salário líquido: R$%.2f", $sal, $pct, $imposto, $sali);
	}
	if ($sal >= 3036 && $sal < 3533.31) {
		impostoRenda(7.5, $sal);
	} elseif ($sal >= 3533.31 && $sal < 4688.85) {
		impostoRenda(15, $sal);
	} elseif ($sal >= 4688.85 && $sal < 5830.85) {
		impostoRenda(22.5, $sal);
	} elseif ($sal >= 5830.85) {
		impostoRenda(27.5, $sal);
	} else {
		impostoRenda(0, $sal);
	}
 ?>