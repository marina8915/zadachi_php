<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>action.php</title>
</head>

<body>

<?php

$n = (int)$_POST['chislo'];
$i = 0;
$S = 0;

do {
    $k = 0;
	$i = $i + 1;
	$k = $i * $i;
	echo "Число ".$i." в квадраті = =".$k. "<br/>";
	$S = $S + $k;
} while ($i != $n);

echo "Сума - ".$S;

?>

</body>
</html>
