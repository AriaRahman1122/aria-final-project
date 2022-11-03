<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM petugas WHERE id_petugas='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='petugas.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='petugas.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit PETUGAS</title>
   
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
            <h1>Edit PETUGAS <?php echo $data['id_petugas']; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="petugas.php">Data petugas</a></div>
              <div class="breadcrumb-item">Edit petugas</div>
            </div>
          </div>

          <div class="section-body bg-primary">
            <h2 class="section-title">Edit petugas</h2>
            <p class="section-lead">Edit petugas Disini</p>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit petugas</h4>
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir petugas
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_editpetugas.php">
                      <div class="wizard-pane">
                        <input name="id" value="<?php echo $data['id_petugas']; ?>"  hidden />
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Nama petugas</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" required=""/>
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">id_petugas</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="id_kelas" value="<?php echo $data['id_petugas']; ?>" required=""/>
                          </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">username</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="username" value="<?php echo $data['username']; ?>" required=""/>
                          </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">password</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="password" value="<?php echo $data['password']; ?>" required=""/>
                          </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">nama_petugas</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" required=""/>
                          </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">level</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="level" value="<?php echo $data['level']; ?>" required=""/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn btn-icon icon-right btn-primary">Rubah petugas<i class="fas fa-arrow-right"></i></button>>
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