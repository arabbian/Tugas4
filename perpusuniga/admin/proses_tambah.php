<?php
if ($_POST) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($nama)) {
		echo "<script>alert('Nama Mahasiswa tidak boleh kosong');
		location.href = 'tambah_mahasiswa.php'</script>";

	} elseif (empty($nim)) {
		echo "<script>alert('Nim tidak boleh kosong');
		location.href = 'tambah_mahasiswa.php'</script>";

	} elseif (empty($alamat)) {
		echo "<script>alert('Alamat tidak boleh kosong');
		location.href = 'tambah_mahasiswa.php'</script>";
	} else {
		include "../koneksi.php";
		$insert = mysqli_query(
			$koneksi, "insert into mahasiswa(nama, nim,id_jurusan,alamat,username,password)
			value ('" . $nama . "','" . $nim . "','" . $jurusan . "','" . $alamat . "','" . $username . "','" . $password . "')"
		) or die(mysqli_error($koneksi));
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data mahasiswa');
		location.href = 'data_mahasiswa.php'</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data mahasiswa');
		location.href = 'data_mahasiswa.php'</script>";
		}
	}

}
?>