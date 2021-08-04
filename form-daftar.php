<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Registrasi Warga</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="template/img/regis image.jpg" width="100%" height="100%" alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Form Registrasi Warga</b></h1>
                                    </div>
                                    <form class="user" action="index.php" method="post">
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user"
                                            name="no_ktp" id="no_ktp" placeholder="Masukan Nomor KTP">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            name="alamat_lengkap" id="alamat_lengkap" placeholder="Masukan Alamat Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user"
                                            name="no_hp" id="no_hp" placeholder="Masukan No HP">
                                        </div>

                                        <button name="daftar" type="submit" class="btn btn-primary btn-user btn-block">
                                           <b>Daftar</b> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

</body>

</html>