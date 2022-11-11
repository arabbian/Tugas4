<?php
if ($_POST) {
    $matkul = $_POST['matkul'];

    if (empty($matkul)) {
        echo "<script> alert ('Tolong Masukan MataKuliah anda ');
		location.href = 'tambah_matkul.php'</script>";

    } else {
        include "../koneksi.php";
        $insert = mysqli_query(
            $koneksi, "insert into matkul(nama_matkul)
			value ('" . $matkul . "')"
        ) or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan data matkul');
		location.href = 'data_matkul.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data matkul');
		location.href = 'data_matkul.php'</script>";
        }
    }

}
?>