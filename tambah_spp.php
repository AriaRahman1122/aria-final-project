<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah PEMESANAN</title>
   
  </head>
<body>
  <?php
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
  
<div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>Tambah PEMESANAN</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="spp.php">Data PEMESANAN</a></div>
              <div class="breadcrumb-item">Tambah PEMESANAN</div>
            </div>
          </div>

          <div class="section-body bg-primary">
            <h2 class="section-title">Tambah PEMESANAN</h2>
            <p class="section-lead">Tambah PEMESANAN Disini</p>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah PEMESANAN</h4>
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-money-check-alt"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir PEMESANAN
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahspp.php">
                      <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">TANGGAL</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="tahun" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">NOMINAL</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nominal" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn-icon btn-icon icon-right btn-primary">Tambah PEMESANAN<i class="fas fa-arrow-right"></i></button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      