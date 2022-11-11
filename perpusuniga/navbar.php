<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
</head>

<body>

  <nav class=" navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: 6px 6px 6px -4px;">
    <div class="container ">
      <a class="navbar-brand text-white" href="#"><i class="bi bi-book"></i></i> PERPUSTAKAAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="data_mahasiswa.php" style="">Data
              Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_dosen.php">Data Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_jurusan.php">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="data_matkul.php">Mata Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_jadwal.php">Jadwal</a>
          </li>
        </ul>
        <div class="col card-header text-right">
          <a href="../logout.php" type="button" class="btn btn-danger plus float-right">
            <span data-feather="plus"></span>
            LOGOUT
          </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid bg-light " style="margin-top: 30px">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>

</body>

</html>