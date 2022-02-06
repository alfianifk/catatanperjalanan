<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href=" <?= base_url('/assets/css/style.css'); ?>">
  <link rel="stylesheet" href=" <?= base_url('/assets/css/components.css'); ?> ">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <h4>Register Akun Baru</h4>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="#">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama_depan">Nama Depan</label>
                      <input id="nama_depan" type="text" class="form-control" name="nama_depan" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="nama_belakang">Nama Belakang</label>
                      <input id="nama_belakang" type="text" class="form-control" name="nama_belakang">
                    </div>
                  </div> 
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nik" class="d-block">Nomor Identitas Kependudukan</label>
                      <input id="nik" type="number" class="form-control pwstrength" data-indicator="pwindicator" name="nik">
                    </div>
                    <div class="form-group col-6">
                      <label for="email" class="d-block">Email</label>
                      <input id="email" type="email" class="form-control" name="email">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Jenis Kelamin</label>
                      <select name="jeniskelamin" class="form-control selectric">
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="ttl" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Status Vaksinasi</label>
                      <select name="status_vaksinasi" class="form-control selectric">
                        <option value="1">Sudah di Vaksin</option>
                        <option value="0">Belum di Vaksin</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Alamat</label>
                      <textarea name="alamat" class="form-control selectric"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Bio</label>
                      <textarea class="form-control selectric" name="bio"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input required type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">Saya setuju dengan ketentuan pengguna</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Made with <i class="fas fa-heart"></i> &copy; Catatan Perjalanan <?= date('Y')  ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('') ?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('') ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url('') ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('') ?>/assets/js/page/auth-register.js"></script>
</body>
</html>
