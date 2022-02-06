<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Profile Pengguna</h1>
    </div>
    <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <img src=" <?= base_url('assets/img/default.png'); ?> " class="rounded img-fluid" max_width="20px">
            </div>
            <div class="col-md-3 text-center">
              <h5><?= $this->session->userdata('nama'); ?></h5>
              <?php ($user['jeniskelamin'] == "Perempuan") ? print ('<i class="fas fa-venus"></i>') : print ('<i class="fas fa-mars"></i>'); ?>
              <br>
              <?= $user['bio']  ?>
            </div>
            <div class="col-md-4">
                <label>Nomor Induk Kependudukan</label>
                <h6> <?= $user['nik'] ?> </h6>
                <label>Email</label>
                <h6><?= $user['email'] ?></h6>
                <label>Jenis Kelamin</label>
                <h6> <?= $user['jeniskelamin'] ?> </h6>
                <label>Alamat</label>
                <h6> <?= $user['alamat'] ?> </h6>
            </div>
            <div class="col-md-2">
                <label>Tanggal Lahir</label> <br>
                <h6><?= date("D, d M Y", strtotime($user['ttl'])); ?></h6>
                <label>Umur</label>
                <h6> <?= $user['umur'] ?> </h6>
                <label>Status Vaksinasi</label>
                <h6> <?php ($user['status_vaksinasi'] == 1) ? print('Sudah di Vaksin') : print('Belum di Vaksin') ?> </h6>
            </div>
          </div>
        </div>
    </div>
    <div class="section-body">
    </div>
  </section>
</div>
      