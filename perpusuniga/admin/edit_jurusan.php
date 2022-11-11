<?php
include "../navbar.php";
include "../css.php";
include "../koneksi.php";

$qry_get_jurusan = mysqli_query($koneksi, "select * from jurusan where id_jurusan = '" . $_GET['id_jurusan'] . "'");

if (mysqli_num_rows($qry_get_jurusan) == 0) {
    echo "<script>window.location='data_jurusan.php'</script>";
}

$data_jurusan = mysqli_fetch_array($qry_get_jurusan);
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
                <h3>Edit Dosen</h3>
            </div>
            <div class="card-body">
                <form action="proses_edit_jurusan.php" method="post">
                    <div class="mb-3 row">
                        <input type="hidden" name="id_jurusan" value="<?= $data_jurusan['id_jurusan'] ?>">
                        <label for="text" class="col-sm-2 col-form-label">Nama Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" placeholder="Enter name" name="jurusan"
                                value="<?php echo $data_jurusan['nama_jurusan'] ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Jurusan</button>
                    <a href="data_jurusan.php" class="btn btn-outline-danger">Exit</a>
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