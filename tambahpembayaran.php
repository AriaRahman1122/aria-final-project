<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Pembayaran</title>
   
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
            <h1>Pembayaran</h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

         

                    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             <h5 class="title">Tambah Pembayaran</h5>
              </div>
              <div class="card-body">
                 <form method="POST" action="proses_tambahpembayaran.php" enctype="multipart/form-data" >
                  <section class="base">
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">           
                      <label>Nama Petugas</label>
                      <div class="input-group">
                     <div class="col-lg-12 col-md-12">
                        <select  class="form-control" name="nama_petugas">
                       <option value="not_option">Silahkan Pilih Nama Petugas</option>
                    <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                        $query = "SELECT * FROM petugas ORDER BY nama_petugas ASC";
                        $result = mysqli_query($koneksi, $query);
                        //mengecek apakah ada error ketika menjalankan query
                        if(!$result){
                          die ("Query Error: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                        }

                        //buat perulangan untuk element tabel dari data mahasiswa
                        $no = 1; //variabel untuk membuat nomor urut
                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                        // kemudian dicetak dengan perulangan while
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                   <option class="bg-dark" value="<?php echo $row['id_petugas']; ?>"><?php echo $row['nama_petugas']; ?></option>
                   <?php
                          $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>  
                   </select>
                   </div>
                   </div>
              </div>
                    <div class="form-group">           
                      <label>NISN</label>
                      <div class="input-group">
                     <div class="col-lg-12 col-md-12">
                        <select  class="form-control" name="nisn">
                       <option value="not_option">Silahkan Pilih NISN</option>
                    <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                        $query = "SELECT * FROM siswa ORDER BY nisn ASC";
                        $result = mysqli_query($koneksi, $query);
                        //mengecek apakah ada error ketika menjalankan query
                        if(!$result){
                          die ("Query Error: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                        }

                        //buat perulangan untuk element tabel dari data mahasiswa
                        $no = 1; //variabel untuk membuat nomor urut
                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                        // kemudian dicetak dengan perulangan while
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                   <option class="bg-dark" value="<?php echo $row['nisn']; ?>"><?php echo $row['nisn']; ?></option>
                   <?php
                          $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>  
                   </select>
                   </div>
                   </div>
              </div>
                     <div class="form-group">
                        <label>Tanggal Bayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="date" class="form-control" name="tanggal_bayar" autofocus="" required="" />
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Bulan Dibayar</label>
                           <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                            </div>
                            <input type="date" class="form-control" name="bulan_bayar" autofocus="" required="" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label>Tahun Dibayar</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                            </div>
                            <input type="date" class="form-control" name="tahun_dibayar" autofocus="" required="" />
                          </div>
                    </div>
                 <div class="form-group">           
                      <label>SPP Perbulan</label>
                      <div class="input-group">
                     <div class="col-lg-12 col-md-12">            
                <select  class="form-control" name="spp">
               <option value="not_option">Silahkan Pilih SPP Perbulan</option>
            <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                $query = "SELECT * FROM spp ORDER BY nominal ASC";
                $result = mysqli_query($koneksi, $query);
                //mengecek apakah ada error ketika menjalankan query
                if(!$result){
                  die ("Query Error: ".mysqli_errno($koneksi).
                     " - ".mysqli_error($koneksi));
                }

                //buat perulangan untuk element tabel dari data mahasiswa
                $no = 1; //variabel untuk membuat nomor urut
                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                // kemudian dicetak dengan perulangan while
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
           <option class="bg-dark" value="<?php echo $row['id_spp']; ?>"><?php echo $row['nominal']; ?></option>
           <?php
                  $no++; //untuk nomor urut terus bertambah 1
                }
                ?>  
           </select>
           </div>
           </div>
      </div>
          <div class="form-group">
                        <label>Jumlah Bayar</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="tim-icons icon-coins"></i></div>
                            </div>
                            <input type="text" class="form-control" name="jumlah_bayar" autofocus="" required="" />
                          </div>
                    </div>

                  </div>
                   </section>
                      <button type="submit" class="btn btn-fill btn-success"><i class="fas fa-check"></i></button>
               </div>
                </form>  

              </div>
            </div>
          </div>
                      <br><br>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://smkalihsan.home.blog/">smkalihsan</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
    </div>