<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Pengguna</title>
   
  </head>
<body>
  <?php
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
  
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
             
            </div>
          </div>

      

<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Laporan Transaksi</h5>
              </div>
              <div class="card-body">
                 <form method="POST" action="ekspor.php" enctype="multipart/form-data" >
                  <section class="base">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Dari Tanggal</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                      </div>
                        <input type="date" class="form-control" name="daritanggal" autofocus=""  />
                      </div>
                    </div>
                       <div class="form-group">
                        <label>Sampai Tanggal</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                      </div>
                        <input type="date" class="form-control" name="sampaitanggal" autofocus="" />
                      </div>
                    </div>
                  </div>
                   </section>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-fill btn-success"><i class="fas fa-download"></i></button>
                    </div>
                </form>
              </div>
            </div>
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy;  <div class="bullet"></div> Kuli-Coolly
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
    </div>