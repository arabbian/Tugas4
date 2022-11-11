<?php
include "../navbar.php";
include "../css.php";
session_start();



if ($_SESSION['level'] == "") {
    $_SESSION['gagal-login'] = "Login dulu bos !!!";
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<style>
    .right {
        position: absolute;
        right: 0px;
        width: 250px;
    }
</style>

<body>
    <div class="card">
        <div class="card-header">
            <table>
                <tr>
                    <th>
                        <h3>Data Dosen</h3>
                    </th>
                    <th class="right">
                        <a href="tambah_dosen.php" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                    </th>
                </tr>
            </table>
        </div>
        <div class="card-body">
            <table class="table table-active table-striped ">
                <thead class="table-dark table-striped table-hover">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>TELEPHONE</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../koneksi.php";
                    $qry_dos = mysqli_query($koneksi, "select * from dosen");
                    $no = 0;
                    while ($data_dosen = mysqli_fetch_array($qry_dos)) {
                        $no++; ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $data_dosen['nama_dosen'] ?>
                        </td>
                        <td>
                            <?= $data_dosen['alamat'] ?>
                        </td>
                        <td>
                            <?= $data_dosen['telephone'] ?>
                        </td>
                        <td><a href="edit_dosen.php?id_dosen=<?= $data_dosen['id_dosen'] ?>" class="btn btn-success "><i
                                    class="fa fa-edit"></i> Edit</a>
                            <a href="delete_dosen.php?id_dosen=<?= $data_dosen['id_dosen'] ?>"
                                oneclick="return confirm('Apakah Anda Yakin menghapus data ini ?')"
                                class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Delete</a>
                        </td>

                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

</body>
<?php include "../footer.php" ?>

</html>