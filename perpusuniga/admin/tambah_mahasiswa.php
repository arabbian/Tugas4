<?php
include "../navbar.php";
include "../css.php";
include "../koneksi.php";
$fti = mysqli_query($koneksi, "select * from jurusan");
session_start();



if ($_SESSION['level'] == "") {
	$_SESSION['gagal-login'] = "Login dulu bos !!!";
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
</head>
<style>
	.mx-auto {
		width: 800px;
	}

	.card {
		margin-bottom: 10px;
	}
</style>

<body>
	<div class="mx-auto">
		<div class="card ">
			<div class="card-header">
				<h3>Tambah Mahasiswa</h3>
			</div>
			<div class="card-body">
				<form action="proses_tambah.php" method="post">
					<div class="mb-3 row">
						<input type="hidden" name="id_mahasiswa" value="<?= $data_mahasiswa['id_mahasiswa'] ?>">
						<label for="text" class="col-sm-2 col-form-label">Nama </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="nama"
								required>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="nim" class="col-sm-2 col-form-label">NIM</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nim" placeholder="Enter nim" name="nim"
								required>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="text" class="col-sm-2 col-form-label">Jurusan</label>
						<div class="col-sm-10">
							<select name="jurusan" class="form-control" required>
								<option value="">Pilih Jurusan</option>
								<?php
                                while ($data_jurusan = mysqli_fetch_array($fti)) { ?>
								<option value="<?= $data_jurusan['id_jurusan'] ?>">
									<?= $data_jurusan['nama_jurusan'] ?>
								</option>';
								<?php }
                                ?>
							</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="text" class="col-sm-2 col-form-label" required>Alamat </label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" id="alamat" placeholder="Enter alamat"
								name="alamat"></textarea>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="username" class="col-sm-2 col-form-label">UserName </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="username" placeholder="Enter username"
								name="username" required>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="pwd" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="Enter password"
								name="password" required>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
					<a href="data_mahasiswa.php" class="btn btn-outline-danger">Exit</a>
					<br>
				</form>
			</div>
		</div>
	</div>
	<br>
</body>
</head>
<?php include "../footer.php" ?>

</html>