<!DOCTYPE html>
<?php 
include '../DBConnection/db.php';
session_start();
$username = $_SESSION['username'];
?>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMK YPBI MARTAPURA</title>

    <!-- Bootstrap -->
    <link href="http://localhost/TA/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/TA/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/TA/assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/TA/assets/build/css/custom.min.css" rel="stylesheet">

     <!-- Datatables -->
    <link href="http://localhost/TA/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/TA/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/TA/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/TA/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/TA/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <a href="../dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a> -->
            </div>

            <!--<div class="clearfix"></div>-->

            <!-- menu profile quick info -->
           <!--  <div class="profile clearfix">
              <div class="profile_pic">
                <img src="http://localhost/TA/assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Main Menu</h3>
                <ul class="nav side-menu">
                 <li><a href="../dashboard.php"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a href="../buku/daftarbuku.php"><i class="fa fa-book"></i> Daftar Buku </a>
                     <li><a href="../anggota/daftaranggota.php"><i class="fa fa-user"></i> Daftar Anggota </a>
                   
                  </li>
                 <li><a href="transaksi.php"><i class="fa fa-shopping-cart"></i> Transaksi</a> 
                </ul>
              </div>
              <div class="menu_section">
                
                  
                      
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          <!--   <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <?php
                      $sql = "SELECT * FROM petugas WHERE petugas.username='$username'";
                      $result = mysqli_query($db,$sql);

                      while($row = mysqli_fetch_array($result)){

                        $nama_petugas = $row['nama_petugas'];
                    ?>
                   Selamat Datang Petugas <?php echo $nama_petugas;?> 
                   <?php }?>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="../profile/profile.php"> Profile</a></li>
                   <!--  <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                
                    <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
<!-- 
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul> -->
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_center">
                <h2 align="center">SISTEM PERPUSTAKAAN</h2>
                <h2 align="center">SMK YPBI MARTAPURA</h2>
                <h2 align="center">OKU TIMUR</h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <table id="example" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                     
                          <th>Nama Anggota</th>
                          <th>Nama Buku</th>
                          <th>Nama Petugas</th>
                          <th>Tanggal Pinjam</th>
                          <th>Jumlah Buku</th>
                          <th>Tanggal Kembali</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php 
                          $buku = "SELECT COUNT(transaksi.kode_buku) AS jumlah_buku,anggota.nama_anggota,
                              transaksi.kode_transaksi,buku.judul_buku,petugas.nama_petugas,
                              transaksi.tgl_pinjam,transaksi.tgl_kembali,transaksi.kode_anggota
                                    FROM transaksi
                                    LEFT JOIN anggota ON anggota.kode_anggota=transaksi.kode_anggota
                                    LEFT JOIN buku ON buku.kode_buku=transaksi.kode_buku
                                    LEFT JOIN petugas ON petugas.kode_petugas=transaksi.kode_petugas
                                    GROUP BY anggota.nama_anggota";
                          $result = mysqli_query($db,$buku);

                          while($row = mysqli_fetch_array($result)){
                              $kode_transaksi = $row['kode_transaksi'];
                            /*  $kode_buku = $row['kode_buku'];*/
                            $kode_anggota = $row['kode_anggota'];
                              $nama_anggota = $row['nama_anggota'];
                              $nama_buku = $row['judul_buku'];
                              $nama_petugas = $row['nama_petugas'];
                              $tanggal_pinjam = $row['tgl_pinjam'];
                              $jumlah_buku = $row['jumlah_buku'];
                              $tanggal_kembali = $row['tgl_kembali'];

                        ?>
                     


                      <tbody>
                          <tr>
                         
                          <td><?php echo $nama_anggota;?></td>
                          <td><?php echo $nama_buku;?></td>
                          <td><?php echo $nama_petugas;?></td>
                          <td><?php echo $tanggal_pinjam;?></td>
                          <td><?php echo $jumlah_buku;?></td>
                          <td><?php echo $tanggal_kembali;?></td>
                          <td>
                            <a href="form_tambah_transaksi.php" class="btn btn-success">Tambah</a>
                            <a href="delete_transaksi.php?kode_anggota=<?php echo $kode_anggota;?>"  onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                        <?php }?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 
   

    <!-- jQuery -->
    <script src="http://localhost/TA/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/TA/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/TA/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/TA/assets/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/TA/assets/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="http://localhost/TA/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="http://localhost/TA/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="http://localhost/TA/assets/vendors/pdfmake/build/vfs_fonts.js"></script>
   <script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
        buttons: [
            'pdf'
        ]
    });
  });
    </script>

   

  </body>
</html>