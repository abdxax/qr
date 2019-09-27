<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "phpqrcode/qrlib.php";

QRcode::png("www.ksa.com","new2.png","H","10","10");
?>

<img src="new.png">
</body>
</html>