<?php 
	$num1 = 10;
	$num2 = 30;
	$op = 5;

	// Selecione uma operacao a fazer
	// 1 - Soma
	// 2 - Subtra
	// 3 - Divisao
	// $op = 3

	switch ($op) {
		case 1:
			echo($num1 + $num2);
			break;

		case 2: 
		 	echo( $num1 - $num2);
			break;
		
		case 3:
			echo($num1 / $num2);
			break;
		case 4: 
			echo ($num1 * $num2);
			break;

		
		default:
		echo " sair ";
			// code...
			break;
	}

 ?>