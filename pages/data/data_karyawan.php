<?php  include '../../php/koneksi.php';   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WB Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/wb/logo_wb.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include '../sidebar/sidebar.php';  ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include '../navbar/navbar.php'; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <center><h4 class="card-title">Data Karyawan</h4>
                    <p class="card-description">Login Akses</p></center>
                    <div class="table-responsive">
                      <?php 
                        $conn = OpenCon();
                        $sql = "SELECT * FROM `karyawan`";
                        $res = mysqli_query($conn, $sql);
                        if(!$res){
                          echo "Gagal disimpan!";
                        }
                      ?>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Nama </th>
                            <th> Email </th>
                            <th> Password </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while($row = mysqli_fetch_array($res)){ ?>
                            <tr>
                              <td><?php echo $row['id_karyawan']; ?></td>
                              <td><?php echo $row['nama']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['password']; ?></td>
                              <td>
                                <form class="forms-sample" action="../../php/input-data/karyawan.php" method="POST">
                                  <input type="text" class="form-control" name="id" placeholder="Nama" hidden value="<?php echo $row['id_karyawan']; ?>"> 
                                  <input type="text" class="form-control" name="nama" placeholder="Nama" hidden <?php echo $row['nama']; ?>>
                                  <input type="email" class="form-control" name="email" placeholder="Email WB" hidden <?php echo $row['email']; ?>>
                                  <input type="password" class="form-control" name="password" placeholder="Password" hidden <?php echo $row['password']; ?>>
                                  <button class="badge badge-danger" name="submitKaryawanDelete">Delete</button>
                                </form>
                                <form class="forms-sample" action="../update-data/update_karyawan.php" method="POST">
                                  <input type="text" class="form-control" name="id" placeholder="Nama" hidden value="<?php echo $row['id_karyawan']; ?>"> 
                                  <input type="text" class="form-control" name="nama" placeholder="Nama" hidden value="<?php echo $row['nama']; ?>">
                                  <input type="email" class="form-control" name="email" placeholder="Email WB" hidden value="<?php echo $row['email']; ?>">
                                  <input type="password" class="form-control" name="password" placeholder="Password" hidden value="<?php echo $row['password']; ?>">
                                  <button class="badge badge-warning" name="submitKaryawanUpdate">Update</button>
                                </form>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">WB productions © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>