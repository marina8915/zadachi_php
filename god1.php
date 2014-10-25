<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>5</title>
</head>

<body>


<?php

$n = (int)$_POST['god'];
$y = fmod ($n, 4);

if ($n <= 1 or $n >= 1999) {
    echo 'Введіть число від 1 до 9999';
} else {
		if($y<=0){
            echo "Рік високосний";
        } else {
            echo "Рік не високосний";
        }
}
?>

</body>
</html>
