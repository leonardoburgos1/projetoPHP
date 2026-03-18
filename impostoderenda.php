<?php 
	
	$sal = 10000;
	

	if ($sal >= 3036 && $sal < 3533.31) {
		$pct = 7.5;
		$imposto = $sal * $pct / 100;
		$sali = $sal - $imposto;
		printf("Salário bruto: R$%.2f <br/>
				Porcetagem de desconto: %.1f%%<br/>
				Valor do desconto: R$%.2f <br/>
				Salário líquido: R$%.2f", $sal, $pct, $imposto, $sali);
	} elseif ($sal >= 3533.31 && $sal < 4688.85) {
		$pct = 15;
		$imposto = $sal * $pct / 100;
		$sali = $sal - $imposto;
		printf("Salário bruto: R$%.2f <br/>
				Porcetagem de desconto: %.1f%%<br/>
				Valor do desconto: R$%.2f <br/>
				Salário líquido: R$%.2f", $sal, $pct, $imposto, $sali);
	} elseif ($sal >= 4688.85 && $sal < 5830.85) {
		$pct = 22.5;
		$imposto = $sal * $pct / 100;
		$sali = $sal - $imposto;
		printf("Salário bruto: R$%.2f <br/>
				Porcetagem de desconto: %.1f%%<br/>
				Valor do desconto: R$%.2f <br/>
				Salário líquido: R$%.2f", $sal, $pct, $imposto, $sali);
	} elseif ($sal >= 5830.85) {
		$pct = 27.5;
		$imposto = $sal * $pct / 100;
		$sali = $sal - $imposto;
		printf("Salário bruto: R$%.2f <br/>
				Porcetagem de desconto: %.1f%%<br/>
				Valor do desconto: R$%.2f <br/>
				Salário líquido: R$%.2f", $sal, $pct, $imposto, $sali);
	} else {
		$pct = 0;
		$imposto = 0;
		$sali = $sal - $imposto;
		printf("Salário bruto: R$%.2f <br/>
				Porcetagem de desconto: %.1f%%<br/>
				Valor do desconto: R$%.2f <br/>
				Salário líquido: R$%.2f", $sal, $pct, $imposto, $sali);
		//comentario
	}
 ?>