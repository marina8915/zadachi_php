<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

$k [1] = "1";
$k [2] = "2";
$k [3] = "3";
$k [4] = "4";
$k [5] = "5";
$k [6] = "6";
$k [7] = "7";
$k [8] = "8";
$k [9] = "9";
$k [10] = "10";
$k [11] = "Valet";
$k [12] = "Dama";
$k [13] = "Korol";
$k [14] = "Tuz";

$n = (int)$_GET['karta'];

foreach ($k as $key => $value) {
        if ($key == $n) {
            echo "Ви вибрали карту - ".$value;
        }
}
if ($n >= 15 or $n <1 ) {
    echo "Введено не вірне значення. Введіть число від 1 до 14.";
}

?>

</body>
</html>
