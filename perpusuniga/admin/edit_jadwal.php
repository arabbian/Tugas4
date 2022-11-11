<?php
include "../navbar.php";
include "../css.php";
include "../koneksi.php";
$qry_get_jadwal = mysqli_query($koneksi, "select * from jadwal where id_jadwal = '" . $_GET['id_jadwal'] . "'");

$data_jadwal = mysqli_fetch_array($qry_get_jadwal);

$mat = mysqli_query($koneksi, "select * from matkul");
$dos = mysqli_query($koneksi, "select * from dosen");
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
                <h3>Tambah Data Jadwal</h3>
            </div>
            <div class="card-body">
                <form action="proses_edit_jadwal.php" method="post">
                    <div class="mb-3 row">
                        <input type="hidden" name="id_jadwal" value="<?= $data_jadwal['id_jadwal'] ?>">
                        <label for="hari" class="col-sm-2 col-form-label">Hari </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="hari" id="hari">
                                <?php $hari = $data_jadwal['hari'] ?>
                                <option value="Senin" <?= $hari == 'Senin' ? 'selected' :null ?>>Senin</option>
                                <option value="Selasa" <?= $hari == 'Selasa' ? 'selected' :null ?>>Selasa</option>
                                <option value="Rabu"<?= $hari == 'Rabu' ? 'selected' :null ?>>Rabu</option>
                                <option value="Kamis"<?= $hari == 'Kamis' ? 'selected' :null ?>>Kamis</option>
                                <option value="Jumat"<?= $hari == 'Jumat' ? 'selected' :null ?>>Jumat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" id="jam" placeholder="Enter jam" name="jam"
                                value="<?php echo $data_jadwal['jam'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-sm-2 col-form-label">MataKuliah</label>
                        <div class="col-sm-10">
                        <select name="matkul" class="form-control">
								<?php
                                while ($kul = mysqli_fetch_array($mat)) { ?>
								<option value="<?= $kul['id_matkul'] ?>" <?= $data_jadwal['id_matkul'] == $kul
	                                	['id_matkul'] ? 'selected' : null ?>><?= $kul['nama_matkul'] ?>
								</option>';
								<?php }
                                ?>
							</select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-sm-2 col-form-label">Dosen </label>
                        <div class="col-sm-10">
                        <select name="dosen" class="form-control">
								<?php
                                while ($d = mysqli_fetch_array($dos)) { ?>
								<option value="<?= $d ['id_dosen'] ?>" <?= $data_jadwal['id_dosen'] == $d
	                                	['id_dosen'] ? 'selected' : null ?>><?= $d['nama_dosen'] ?>
								</option>';
								<?php }
                                ?>
							</select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Jadwal</button>
                    <a href="data_jadwal.php" class="btn btn-outline-danger">Exit</a>
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