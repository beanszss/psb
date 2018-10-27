<!DOCTYPE html>
<html>
<head>
	<title>daftar</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/plugin/bootstrap/css/bootstrap.min.css') ?>">

</head>

	<body>

		<form action="<?php echo base_url('home/proseslogin') ?>" method="post">
			
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="password">
			</div>
			
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

	<script type="text/javascript" src="<?php echo base_url('assets/plugin/jquery/jquery-3.3.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/plugin/bootstrap/js/bootstrap.min.js') ?> "></script>

	</body>
</html>