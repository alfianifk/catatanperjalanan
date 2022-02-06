<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Welcome, <?= $this->session->userdata('nama') ?></h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href=" <?= base_url('dashboard/cetakPdf'); ?> " class="ml-3 btn btn-sm btn-secondary">Export to Pdf</a>
            </div>
            <div class="card-body">
              <div class="table-responsive table">
                <table class="table table-striped" id="example">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Hari/Tanggal</th>
                      <th>Lokasi yang di Kunjungi</th>
                      <th>Jam</th>
                      <th>Suhu Tubuh</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($catatan as $c) : ?>
                    <tr>
                      <td> <?= $no++;  ?> </td>
                      <td> <?= date("D, d M Y", strtotime($c['tanggal'])); ?> </td>
                      <td> <?= $c['lokasi']; ?></td>
                      <td> <?= $c['jam']; ?> </td>
                      <td> <?= $c['suhu_tubuh']; ?>&deg; </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      