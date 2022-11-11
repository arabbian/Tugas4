<?php
include "../navbar.php";
include "../css.php";
include "../koneksi.php";
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
                <form action="proses_tambah_jadwal.php" method="post">
                    <div class="mb-3 row">
                        <input type="hidden" name="id_jadwal" value="<?= $data_jadwal['id_jadwal'] ?>">
                        <label for="hari" class="col-sm-2 col-form-label">Hari </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="hari" id="hari" required>
                                <option value="">Pilih Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" id="jam" placeholder="Enter jam" name="jam"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-sm-2 col-form-label">MataKuliah</label>
                        <div class="col-sm-10">
                            <select name="matkul" class="form-control" required>
                                <option value="">Pilih Mata Kuliah</option>
                                <?php
                                while ($data_matkul = mysqli_fetch_array($mat)) { ?>
                                <option value="<?= $data_matkul['id_matkul'] ?>">
                                    <?= $data_matkul['nama_matkul'] ?>
                                </option>';
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-sm-2 col-form-label">Dosen </label>
                        <div class="col-sm-10">
                            <select name="dosen" class="form-control" required>
                                <option value="">Pilih Dosen</option>
                                <?php
                                while ($data_dosen = mysqli_fetch_array($dos)) { ?>
                                <option value="<?= $data_dosen['id_dosen'] ?>">
                                    <?= $data_dosen['nama_dosen'] ?>
                                </option>';
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Jadwal Kuliah</button>
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