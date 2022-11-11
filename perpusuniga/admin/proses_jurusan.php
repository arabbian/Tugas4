<?php
if ($_POST) {
    $jurusan = $_POST['jurusan'];

    if (empty($jurusan)) {
        echo "<script> alert ('Tolong Masukan jurusan anda ');
		location.href = 'tambah_jurusan.php'</script>";

    } else {
        include "../koneksi.php";
        $insert = mysqli_query(
            $koneksi, "insert into jurusan(nama_jurusan)
			value ('" . $jurusan . "')"
        ) or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan data jurusan');
		location.href = 'data_jurusan.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data jurusan');
		location.href = 'data_jurusan.php'</script>";
        }
    }

}
?>