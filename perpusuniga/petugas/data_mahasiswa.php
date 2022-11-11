<?php
include "../navbar.php";
include "../css.php";

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
	.right {
		position: absolute;
		right: 0px;
		width: 250px;
	}
</style>

<body>

	<div class="card">
		<div class="card-header">
			<table>
				<tr>
					<th>
						<h3>Data Mahasiswa</h3>
					</th>
				</tr>
			</table>
		</div>
		<div class="card-body">
			<table class="table  table-striped table-bordered table-hover ">
				<thead class="table-dark t ">
					<tr class="text-center">
						<th>NO</th>
						<th>NAMA</th>
						<th>NIM</th>
						<th>JURUSAN</th>
						<th>ALAMAT</th>
						<th>Username</th>
						<th>Password</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    include "../koneksi.php";
                    $qry_mahasiswa = mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan= mahasiswa.id_jurusan");
                    $no = 0;
                    while ($data_mahasiswa = mysqli_fetch_array($qry_mahasiswa)) {
	                    $no++; ?>
					<tr class="text-center">
						<td>
							<?= $no ?>
						</td>
						<td>
							<?= $data_mahasiswa['nama'] ?>
						</td>
						<td>
							<?= $data_mahasiswa['nim'] ?>
						</td>
						<td>
							<?= $data_mahasiswa['nama_jurusan'] ?>
						</td>
						<td>
							<?= $data_mahasiswa['alamat'] ?>
						</td>
						<td>
							<?= $data_mahasiswa['username'] ?>
						</td>
						<td>
							<?= $data_mahasiswa['password'] ?>
						</td>
					</tr>
					<?php
                    }
                    ?>

				</tbody>
			</table>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>

</body>
<?php include "../footer.php"; ?>

</html>