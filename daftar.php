<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Daftar &mdash; Kuli-Coolly</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/components.css">

</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">

              <img src="assets2/img/avatar/avatar-2.PNG" alt="logo" width="100" >

            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar</h4></div>

              <div class="card-body">
                <form method="POST" action="index.php">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Depan</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" required="">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama Belakang</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" required="">
                    </div>
                  </div>

                    <div class="form-group">
                      <label>Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                      <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda .." required="required">
                      </div>
                    </div>

                  <div class="row">
                    <div class="form-group ml-3">
                      <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                            </div>
                          <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda .." required="required">
                        </div>
                      </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Konfirmasi Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                            </div>
                          <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda .." required="required">
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox" >
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required="">
                      <label class="custom-control-label" for="agree">Saya Setuju Dengan Peraturan Yang Ada</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Sudah mempunyai akun? <a href="index.php">Masuk Sekarang</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kuli-Coolly
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/auth-register.js"></script>
</body>
</html>
