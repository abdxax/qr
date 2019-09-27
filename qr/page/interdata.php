<?php
require "../oop/user.php";

if (isset($_POST['sub'])) {
	# code...
	$phone=strip_tags($_POST['phone']);
	$iss=strip_tags($_POST['iss']);
	$pro=strip_tags($_POST['pro']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section>
	<div class="conatiner">
		<div class="row">
			<form method="POST">
				<div class="form-group">
					<input type="text" name="phone" class="contrl-form">
				</div>
				<div class="form-group">
					<input type="text" name="pro" class="contrl-form">
				</div>
				<div class="form-group">
					<input type="text" name="iss" class="contrl-form">
				</div>
				<div class="form-group">
					<input type="submit" name="sub" class="btn btn-info">
				</div>
			</form>
		</div>
	</div>
</section>
</body>
</html>