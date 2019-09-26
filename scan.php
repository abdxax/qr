<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "phpqrcode/qrlib.php";

QRcode::png("www.google.com","new.png","H","10","10");
?>

<img src="new.png">
</body>
</html>