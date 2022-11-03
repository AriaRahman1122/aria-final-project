<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pembayaran</title>
    
  </head>
<body>

	<?php

  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

     
      
   <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pembayaran</h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

          <div class="section-body">
            
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="btn btn-link">
                           <?php
                        $kata_kunci="";
                        if (isset($_POST['kata_kunci'])) {
                            $kata_kunci=$_POST['kata_kunci'];
                        }
                        ?>
                   <input class="text-dark" type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" placeholder="Silahkan Cari Disini" required/>
                  <button class="btn btn-success" type="submit"><i class="fas fa-search fa-fw"></i></button>
                </form>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>LIST Pembayaran</h4>
                    <div class="card-header-form">
                      <form>
                          <div class="input-group-btn">
                            <a href="tambah_pembayaran.php" class="btn btn-success"><i class="fas fa-plus"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                      <thead>
                                        <tr>                         
                                         <th>No</th>
                                          <th>Nama Petugas</th>
                                          <th>NISN</th>
                                          <th>Tanggal Bayar</th>
                                          <th>Bulan Dibayar</th>
                                          <th>Tahun Dibayar</th>
                                          <th>Spp Per Bulan</th>
                                          <th>Jumlah Dibayar</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                         
                          // jalankan query untuk menampilkan semua data diurutkan berdasarkan id

                            if (isset($_POST['kata_kunci'])) {
                                $kata_kunci=trim($_POST['kata_kunci']);
                                $query="select * from pembayaran,petugas,spp where id_pembayaran like '%".$kata_kunci."%' or bulan_dibayar like '%".$kata_kunci."%' or tahun_dibayar like '%".$kata_kunci."%' order by bulan_dibayar asc";

                            }else {
                            $query="select * from pembayaran,petugas,spp where pembayaran.id_petugas=petugas.id_petugas and pembayaran.id_spp=spp.id_spp order by id_pembayaran asc";
                            }

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
                         <tr class="text-center">
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nama_petugas']; ?></td>
                            <td><?php echo $row['nisn']; ?></td>
                            <td><?php echo $row['tgl_bayar']; ?></td>
                            <td><?php echo $row['bulan_dibayar']; ?></td>
                            <td><?php echo $row['tahun_dibayar']; ?></td>
                            <td><?php echo substr($row['nominal'], 0, 20); ?></td>
                            <td><?php echo $row['jumlah_bayar']; ?></td>
                            <td>
                          <a href="edit_pembayaran.php?id=<?php echo $row['id_pembayaran']; ?>"class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="proses_hapuspembayaran.php?id=<?php echo $row['id_pembayaran']; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                          </td>
                                            </tr>
                                               
                                            <?php
                                              $no++; //untuk nomor urut terus bertambah 1
                                            }
                                            ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                      </tr>
                    </thead>
                    <tbody>
                     
                     
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
      
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="#"><font color="green">XII RPL</font></a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>
</body>
</html>