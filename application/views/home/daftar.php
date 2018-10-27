<!DOCTYPE html>
<html>
<head>
	<title>daftar</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/plugin/bootstrap/css/bootstrap.min.css') ?>">

</head>

	<body>

		<form action="<?php echo base_url('home/prosesdaftar') ?>" method="post">
			<div class="form-group">
				<label for="email">Nama Lengkap:</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label for="email">Jenis Kelamin:</label>
				<select class="form-control" name="jenkel">
					<option value="">Pilih Jenis Kelamin</option>
					<option value="Laki - Laki">Laki - Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label for="email">Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir">
			</div>
			<div class="form-group">
				<label for="email">Tanggal Lahir</label>
				<input type="date" class="form-control" name="tgl_lahir">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

	<script type="text/javascript" src="<?php echo base_url('assets/plugin/jquery/jquery-3.3.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/plugin/bootstrap/js/bootstrap.min.js') ?> "></script>

	</body>
</html>