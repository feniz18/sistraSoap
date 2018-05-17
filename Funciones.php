<?php
	function calculadora($num1,$num2,$op)
	{
		if($op == "+")
		{
			$suma = $num1 + $num2;
			return $suma;
		}
		elseif ($op == "-")
		{
			$suma = $num1 - $num2;
			return $suma;
		}
		elseif ($op == "*")
		{
			$suma = $num1 * $num2;
			return $suma;
		}
		elseif ($op == "/")
		{
			$suma = $num1 / $num2;
			return $suma;
		}
		else
		{
			return "error";
		}
	}
?>