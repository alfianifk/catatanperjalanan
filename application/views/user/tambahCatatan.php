<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Catatan Perjalanan</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <form method="POST" action="">
              <div class="card-header">
                <a href="<?= base_url('dashboard'); ?>" class="badge badge-danger">Kembali</a>
              </div>
              <div class="card-body">
                <?= $this->session->flashdata('berhasil'); ?>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>Jam</label>
                  <input type="time" name="jam" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>Lokasi yang di Kunjungi</label>
                  <input type="text" name="lokasi" class="form-control">
                </div>
                <div class="form-group mb-0">
                  <label>Suhu Tubuh</label>
                  <input type="number" name="suhu_tubuh" class="form-control" required>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
