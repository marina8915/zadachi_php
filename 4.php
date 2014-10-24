<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zadacha 4</title>
</head>

<body>
<h2>Найти сумму чисел, которые делятся на 5</h2>
<p>Разработайте программу, которая из чисел 20..45 находила те, которые делятся на 5 и найдите сумму этих чисел.
Рекомендую использовать функцию fmod для определения "делится число" или "не делится".</p>


<?php

$n = 5;

for($i = 20, $S = 0; $i <= 45; $i++) {

	$k = fmod($i, $n);

	if ($k == 0){
		echo $i.'<br/>';
		$S = $S + $i;
	}
}

echo $S;

?>

</body>
</html>
