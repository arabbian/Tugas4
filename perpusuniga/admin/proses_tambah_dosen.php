<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telephone = $_POST['telephone'];

    if (empty($nama)) {
        echo "<script>alert('Nama dosen tidak boleh kosong');
		location.href = 'tambah_dosen.php'</script>";

    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');
		location.href = 'tambah_dosen.php'</script>";

    } elseif (empty($telephone)) {
        echo "<script>alert('telephone tidak boleh kosong');
    location.href = 'tambah_dosen.php'</script>";

    } else {
        include "../koneksi.php";
        $insert = mysqli_query(
            $koneksi, "insert into dosen(nama_dosen,alamat,telephone)
			value ('" . $nama . "','" . $alamat . "','" . $telephone . "')"
        ) or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan data dosen');
		location.href = 'data_dosen.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data dosen');
		location.href = 'data_dosen.php'</script>";
        }
    }

}
?>