  <?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

 <!-- Main Content -->
      <div class="main-content bg-">
        <br><br><br>
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-30 shadow-info">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Kabupaten -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">Purwakarta</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Pilih Kabupaten</li>
                        <li><a href="kabupaten.php" class="dropdown-item">Purwakarta</a></li>
                        <li><a href="kabupaten.php" class="dropdown-item active">Bandung</a></li>
                        <li><a href="kabupaten.php" class="dropdown-item active">Sumedang</a></li>
                        <li><a href="kabupaten.php" class="dropdown-item active">Jakarta Selatan</a></li>
                        <li><a href="kabupaten.php" class="dropdown-item active">Karawang</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">35</div>
                      <div class="card-stats-item-label">Mitra</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">0</div>
                      <div class="card-stats-item-label">Tetap</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">0</div>
                      <div class="card-stats-item-label">Kontrak</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-info bg-dark">
                  <i class="fas fa-users"></i>   
            </div>
      
    </div>
    
    </section>
    
  </div>
</body>
