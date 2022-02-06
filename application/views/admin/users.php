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
              <a href=" <?= base_url('dashboard/cetakPdfUsers'); ?> " class="ml-3 btn btn-sm btn-secondary">Export to Pdf</a>
            </div>
            <div class="card-body">
              <div class="table-responsive table">
                <table class="table table-striped" id="example">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nik</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($users as $u) : ?>
                    <tr>
                      <td> <?= $no++;  ?> </td>
                      <td> <?= $u['nik'] ?> </td>
                      <td> <?= $u['nama']; ?></td>
                      <td> <?= $u['umur']; ?> </td>
                      <td> <?= $u['alamat']; ?></td>
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
      