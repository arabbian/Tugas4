<?php
if ($_POST) {
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($nama)) {
		echo "<script>alert('Nama Mahasiswa tidak boleh kosong');
		location.href = 'admin/edit.php';</script>";
	} elseif (empty($nim)) {
		echo "<script>alert('Nim Mahasiswa tidak boleh kosong');
			location.href = 'admin/edit.php';</script>";
	} elseif (empty($alamat)) {
		echo "<script>alert('Alamat Mahasiswa tidak boleh kosong');
			location.href = 'admin/edit.php';</script>";
	} elseif (empty($username)) {
		echo "<script>alert('Username Mahasiswa tidak boleh kosong');
			location.href = 'admin/edit.php';</script>";
	} elseif (empty($password)) {
		echo "<script>alert('Password Mahasiswa tidak boleh kosong');
			location.href = 'admin/edit.php';</script>";
	} elseif (empty($jurusan)) {
		echo "<script>alert('jurusan Mahasiswa tidak boleh kosong');
			location.href = 'admin/edit.php';</script>";
	} else {
		include "../koneksi.php";
		if (empty($name)) {
			$update = mysqli_query($koneksi, "update mahasiswa set nama ='" . $nama . "',nim='" . $nim . "',id_jurusan='" . $jurusan . "',alamat='" . $alamat . "',username='" . $username . "',password='" . $password . "' where id_mahasiswa='" . $id_mahasiswa . "'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update mahasiswa'); location.href = 'data_mahasiswa.php';</script>";
			} else {
				echo "<script>alert('Gagal update mahasiswa'); location.href = 'edit.php' ? id_mahasiswa = " . $id_mahasiswa . "';</script>";
			}
		} else {
			$update = mysqli_query($koneksi, "update mahasiswa set nama ='" . $nama . "',nim='" . $nim . "',nama_jurusan='" . $jurusan . "',alamat='" . $alamat . "',username='" . $username . "',password='" . $password . "' where id_mahasiswa='" . $id_mahasiswa . "'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update mahasiswa'); location.href = 'data_mahasiswa.php';</script>";
			} else {
				echo "<script>alert('Gagal update mahasiswa'); location.href = 'edit.php' ? id_mahasiswa = " . $id_mahasiswa . "';</script>";
			}
		}

	}
}
?>