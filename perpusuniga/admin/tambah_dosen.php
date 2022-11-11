<?php
include "../navbar.php";
include "../css.php";
include "../koneksi.php";
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
                <h3>Tambah Dosen</h3>
            </div>
            <div class="card-body">
                <form action="proses_tambah_dosen.php" method="post">
                    <div class="mb-3 row">
                        <input type="hidden" name="id_dosen" value="<?= $data_dosen['id_dosen'] ?>">
                        <label for="text" class="col-sm-2 col-form-label">Nama dosen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                        <div class="col-sm-10"><input type="text" class="form-control" id="alamat"
                                placeholder="Enter alamat" name="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="telephone" placeholder="Enter telephone"
                                name="telephone">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Dosen</button>
                    <a href="data_matkul.php" class="btn btn-outline-danger">Exit</a>
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