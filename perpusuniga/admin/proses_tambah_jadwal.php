<?php
if ($_POST) {
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $matkul = $_POST['matkul'];
    $dosen = $_POST['dosen'];


    if (empty($hari)) {
        echo "<script>alert('Hari tidak boleh kosong');
		location.href = 'tambah_jadwal.php'</script>";

    } elseif (empty($jam)) {
        echo "<script>alert('Jam tidak boleh kosong');
		location.href = 'tambah_jadwal.php'</script>";

    } elseif (empty($matkul)) {
        echo "<script>alert('MataKuliah tidak boleh kosong');
		location.href = 'tambah_jadwal.php'</script>";

    } elseif (empty($dosen)) {
        echo "<script>alert('Dosen tidak boleh kosong');
		location.href = 'tambah_jadwal.php'</script>";
    } else {
        include "../koneksi.php";
        $insert = mysqli_query(
            $koneksi, "insert into jadwal(hari, jam,id_matkul,id_dosen)
			value ('" . $hari . "','" . $jam . "','" . $matkul . "','" . $dosen . "')"
        ) or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan data jadwal');
		location.href = 'data_jadwal.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data jadwal');
		location.href = 'data_jadwal.php'</script>";
        }
    }

}
?>