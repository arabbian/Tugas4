<?php
include "koneksi.php";
include "style.php";
session_start();
?>


<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div  class = 'alert alert-danger'>Username dan password tidak sesuai !</div>";
                        }
                    }
                    if (isset($_SESSION['gagal-login'])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>
                            <?= $_SESSION['gagal-login'] ?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span> </button>
                    </div>
                    <?php
                        session_destroy();
                    }

                    ?>
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign in</h3>
                            <form action="cek_login.php" method="POST" class="my-login-validation">
                                <div class="form-outline mb-4">
                                    <input name="username" type="text" class="form-control form-control-lg" />
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="password" type="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </form>


                            <hr class="my-4">

                            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>