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
                <form action="proses_tambah_matkul.php" method="post">
                    <div class="mb-3 row">
                        <input type="hidden" name="id_matkul" value="<?= $data_matkul['id_matkul'] ?>">
                        <label for="text" class="col-sm-2 col-form-label">Nama Matkul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="matkul" placeholder="Enter name" name="matkul"
                                required>
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