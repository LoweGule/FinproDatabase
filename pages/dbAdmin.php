<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php

require 'fungsiadmin.php';
require 'cekAdmin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?" rel="stylesheet" />

  <!-- table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
  </script>


</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">HewoDocc</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-danger" href="../pages/dbAdmin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Daftar Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/masuk.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Transaksi Masuk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/keluar.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Transaksi Keluar</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="logoutAdmin.php" href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout</span>
              </a>
            </li>
            <!-- side navbar pop -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table mr-1"></i>
          Daftar Produk
        </div>

        <div class="card-body">
          <!-- Button trigger modal tambah baru -->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah Produk Baru
          </button>
          <!-- Button trigger modal tambah stok-->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter2">
            Tambah Stok Produk
          </button>
          <!-- Button trigger modal hapus produk-->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter3">
            Hapus Produk
          </button>

          <!-- konfirmasi -->
          <?php
            if(isset($_SESSION['idtransaksi'])){
          ?>
          <a href="produk/aksitambah.php" name="konfirmasi" class="btn btn-success">Konfirmasi</a>

          <?php
            }
          ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Produk</th>
                  <th>ID Kategori</th>
                  <th>Nama Produk</th>
                  <th>Harga Produk</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $ambilProduk = mysqli_query($conn,"SELECT * FROM produk");
                  while($fetchArray = mysqli_fetch_array($ambilProduk)){
                ?>
                <tr>
                  <td><?= $fetchArray['idProduk'] ?></td>
                  <td><?= $fetchArray['idType'] ?></td>
                  <td><?= $fetchArray['nama'] ?></td>
                  <td><?= $fetchArray['harga'] ?></td>
                  <td><?= $fetchArray['stok'] ?></td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <!-- Modal tambah produk-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <!-- modal header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk Baru</h5>
        </div>
        
        <!-- modal body -->
        <form action='produk/tambahbaru.php' method='POST' enctype="multipart/form-data">
          <div class="modal-body">
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
              <label class="form-label">Kode Obat</label>
              <input type="text" name='idProduk' class="form-control" required>
            </div>
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
              <label class='form-label'>Nama Obat</label>
              <input type="text" name='nama' class="form-control" required>
            </div>   

            

            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <!-- <label class="form-label">Kode Tipe Obat</label> -->
              <select name='idType' placeholder="Kategori Obat" class="form-control" required>
                  <?php
                    $ambilKategori = mysqli_query($conn,"SELECT * FROM typeproduk");
                    while($fetchArray = mysqli_fetch_array($ambilKategori)){
                    $nama = $fetchArray['nama'];
                    $id = $fetchArray['idType'];
                  ?>

                  <option value="<?=$id;?>"><?=$nama?></option>

                  <?php
                    }
                  ?>
              </select>
            </div>   

            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <label class='form-label'>Harga</label>
                <input type="number" name='harga' class="form-control" required>
            </div>
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <label class='form-label'>Jumlah Barang</label>
                <input type="number" name='stok' class="form-control" required>
            </div>

            <?php
            if(!isset($_SESSION['idtransaksi'])){
            ?>
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <!-- <label class="form-label">Kode Tipe Obat</label> -->
                <select name='supplier' placeholder="Kategori Obat" class="form-control" required>
                  <?php
                          $ambil = mysqli_query($conn,"SELECT * FROM supplier");
                          while($fetchArray = mysqli_fetch_array($ambil)){
                            $nama = $fetchArray['namaSupplier'];
                            $id = $fetchArray['idSupplier'];
                        ?>

                  <option value="<?=$id;?>"><?=$nama?></option>

                  <?php
                          }
                        ?>
                </select>
            </div>

            <?php 
              } 
            ?>
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <!-- <label class='form-label'>Upload Gambar</label> -->
                <input type="file" name='gambar' class="form-control" required>
            </div>
          </div>

          <!-- modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah" class="btn btn-danger">Tambah</button>
          </div>

        </form>
                       
      </div>
    </div>
  </div>
   
  <!-- Modal tambah stok-->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- modal header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Stok Produk</h5>
        </div>
        
        <!-- modal body -->
        <form action='produk/tambahstok.php' method='POST'>
          <div class="modal-body">       
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <select name='idProduk' placeholder="Nama Obat" class="form-control" required>
                  <?php
                          $ambilKategori = mysqli_query($conn,"SELECT * FROM produk");
                          while($fetchArray = mysqli_fetch_array($ambilKategori)){
                            $nama = $fetchArray['nama'];
                            $id = $fetchArray['idProduk'];
                        ?>

                  <option value="<?=$id;?>"><?=$nama?></option>

                  <?php
                          }
                        ?>
                </select>
            </div>

            <?php
            if(!isset($_SESSION['idtransaksi'])){
            ?>
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <!-- <label class="form-label">Kode Tipe Obat</label> -->
                <select name='supplier' placeholder="Kategori Obat" class="form-control" required>
                  <?php
                          $ambil = mysqli_query($conn,"SELECT * FROM supplier");
                          while($fetchArray = mysqli_fetch_array($ambil)){
                            $nama = $fetchArray['namaSupplier'];
                            $id = $fetchArray['idSupplier'];
                        ?>

                  <option value="<?=$id;?>"><?=$nama?></option>

                  <?php
                          }
                        ?>
                </select>
            </div>
            <?php
              }
            ?>
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <label class='form-label'>Jumlah Barang</label>
                <input type="number" name='stok' class="form-control" required>
            </div>
          </div>

          <!-- modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah" class="btn btn-danger">Tambah Produk Baru</button>
          </div>

        </form>
                       
      </div>
    </div>
  </div>
  
  <!-- Modal hapus produk-->
  <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- modal header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hapus Produk</h5>
        </div>
        
        <!-- modal body -->
        <form action='produk/hapusproduk.php' method='POST'>
          <div class="modal-body">       
            <div class="input-group input-group-dynamic mb-4 col-xs-2">
                <select name='idProduk' placeholder="" class="form-control" required>
                  <?php
                          $ambilKategori = mysqli_query($conn,"SELECT * FROM produk");
                          while($fetchArray = mysqli_fetch_array($ambilKategori)){
                            $nama = $fetchArray['nama'];
                            $id = $fetchArray['idProduk'];
                        ?>

                  <option value="<?=$id;?>"><?=$nama?></option>

                  <?php
                    }
                  ?>
                </select>
            </div>
          </div>

          <!-- modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" name="hapus" class="btn btn-danger">Hapus Produk</button>
          </div>

        </form>
                       
      </div>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>

  <!-- table -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="../assets/js/dataTable.js"></script>

  <!-- jQuery library -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>