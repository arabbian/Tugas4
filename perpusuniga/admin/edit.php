<?php

include "../css.php";
include "../koneksi.php";
include "../navbar.php";
$qry_get_mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id_mahasiswa = '" . $_GET['id_mahasiswa'] . "'");

if (mysqli_num_rows($qry_get_mahasiswa) == 0) {
	echo "<script>window.location='data_mahasiswa.php'</script>";
}

$data_mahasiswa = mysqli_fetch_array($qry_get_mahasiswa);
$fti = mysqli_query($koneksi, "select * from jurusan");
session_start();



if ($_SESSION['level'] == "") {
	$_SESSION['gagal-login'] = "Login dulu bos !!!";
	header("location:index.php");
}
?>
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
				<h3>Edit Mahasiswa</h3>
			</div>
			<div class="card-body">
				<form action="proses_edit.php" method="post">
					<div class="mb-3 row">
						<input type="hidden" name="id_mahasiswa" value="<?= $data_mahasiswa['id_mahasiswa'] ?>">
						<label for="text" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="nama"
								value="<?php echo $data_mahasiswa['nama'] ?>">
						</div>
					</div>
					<div class=" mb-3 row">
						<label for="nim" class="col-sm-2 col-form-label">NIM</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nim"
								value="<?php echo $data_mahasiswa['nim'] ?>" placeholder="Enter nim" name="nim">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="text" class="col-sm-2 col-form-label">Jurusan</label>
						<div class="col-sm-10">
							<select name="jurusan" class="form-control">
								<?php
                                while ($raw = mysqli_fetch_array($fti)) { ?>
								<option value="<?= $raw['id_jurusan'] ?>" <?= $data_mahasiswa['id_jurusan'] ==$raw
	                                	['id_jurusan'] ? 'selected' : null ?>><?= $raw['nama_jurusan'] ?>
								</option>';
								<?php }
                                ?>
							</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="text" class="col-sm-2 col-form-label">Alamat </label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" id="alamat" placeholder="Enter alamat"
								name="alamat"><?php echo $data_mahasiswa['alamat'] ?></textarea>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="username" class="col-sm-2 col-form-label">UserName </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="username" placeholder="Enter username"
								name="username" value="<?php echo $data_mahasiswa['username'] ?>">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="pwd" class="col-sm-2 col-form-label">Password:</label>
						<div class="col-sm-10">
							<input type="" class="form-control" id="password" placeholder="Enter password"
								name="password" value="<?php echo $data_mahasiswa['password'] ?>">
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
					<a href="data_mahasiswa.php" class="btn btn-outline-danger">Exit</a>
					<br>
				</form>
			</div>
		</div>
	</div>
	<br>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>




</body>
<?php include "../footer.php" ?>

</html>