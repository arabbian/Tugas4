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
						<h3>Data Matkul</h3>
					</th>
				</tr>
			</table>
		</div>
		<div class="card-body">
			<table class="table  table-striped table-bordered table-hover ">
				<thead class="table-dark ">
					<tr>
						<th>NO</th>
						<th>NAMA MATAKULIAH</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    include "../koneksi.php";
                    $qry_matkul = mysqli_query($koneksi, "select * from matkul ");
                    $no = 0;
                    while ($data_matkul = mysqli_fetch_array($qry_matkul)) {
	                    $no++; ?>
					<tr>
						<td>
							<?= $no ?>
						</td>
						<td>
							<?= $data_matkul['nama_matkul'] ?>
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
<?php include "../footer.php" ?>

</html>