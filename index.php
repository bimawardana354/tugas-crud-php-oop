<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Data Warga</title>

    <!-- Custom fonts for this template -->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  </head>

    <?php //include('mylib/warga.lib.php');
      include('mylib/myDb.php');
    ?>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Tables -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Warga</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bima Wardana</span>
                  <img class="img-profile rounded-circle" src="template/img/undraw_profile.svg" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

    <?php
    $Db = new MyDb();
    $data_warga =$Db->show();
    //print_r($data_warga);

    if(isset($_POST['daftar'])) {
        //echo "Tombol Daftar Telah Di Klik";
        $noktp = $_POST['no_ktp'];
        $nama = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat_lengkap'];
        $nohp = $_POST['no_hp'];
        $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
        //print_r($_POST);
        if($querysimpan == TRUE){
            $pesansimpan = "<script>
                    // alert('Berhasil tersimpan');
                    document.location.href = 'index.php';
                </script>";
        } else {
            $pesansimpan = "<script>
                    // alert('Gagal tersimpan');
                    document.location.href = 'index.php';
                </script>";
        }
    }
    if(isset($_GET['hapus'])) {
        $idwarga = $_GET['hapus'];
        $queryhapus = $Db->delete($idwarga);
        if($queryhapus == TRUE){
            $pesanhapus = "<script>
                    // alert('Data Berhasil Di Hapus');
                    document.location.href = 'index.php';
                </script>";
        } else {
            $pesanhapus = "<script>
                    // alert('Data Gagal Di Hapus');
                    document.location.href = 'index.php';
                </script>";
        }
    }
    ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-3 text-gray-800">Data Warga</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 border-bottom-primary">
              <div class="card-header py-3">
                <a href="form-daftar.php" class="btn btn-primary btn-icon-split">
                    <span class="text"><b>Tambah Data Warga</b></span>
                </a>
              </div>

              <?php
                if(isset($_POST['daftar'])) {
                ?>
                <div class="alert alert-success"><?php echo $pesansimpan; ?></div>     
                <?php
                }
            ?>

            <?php
                if(isset($_GET['hapus'])) {
                ?>
                <div class="alert alert-danger"><?php echo $pesanhapus; ?></div>     
                <?php
                }
            ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tablewarga" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No KTP</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    <?php 
                        $i=0;
                      foreach($data_warga as $data) { 
                        $i++;
                    ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['no_ktp']; ?></td>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                        <td><?php echo $data['alamat_lengkap']; ?></td>
                        <td>2<?php echo $data['no_hp']; ?></td>
                        <td>                                    
                            <a href="detail-warga.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                            <a href="index.php?hapus=<?php echo $data['id']; ?>" class="btn btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Hapus</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Bima Wardana 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="template/js/demo/datatables-demo.js"></script>
  </body>
</html>
