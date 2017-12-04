<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="shortcut icon" href="img/logo.png">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="cont col-md-4">
		<form action="<?=base_url()?>admin/login" method='post'>
			<div class="form-group">
				<label for="">Login</label>
				<input type="text" name="login" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="pass" class="form-control">
			</div>
			<input type="submit" class="btn btn-info">
		</form>
	</div>
</body>
</html>