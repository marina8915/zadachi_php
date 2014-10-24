<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

	$S = (int)($_POST['chislo']);

 	for ($i = 0; $S > 5; $i++) {
        $S =$S-5;
    }

	if ($S == 1 or $S == 2 or $S == 3) {
        echo "Горить зелений";
    }

	if ($S == 4 or $S == 5) {
        echo "Горить червоний";
    }

?>

</body>
</html>
