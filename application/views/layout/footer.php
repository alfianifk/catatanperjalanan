<footer class="main-footer">
        <div class="footer-left">
         Made with <i class="fas fa-heart"></i> &copy; Catatan Perjalanan <?= date('Y')  ?>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url(''); ?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>


  <!-- Template JS File -->
  <script src="<?= base_url(''); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url(''); ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->

  <script type="text/javascript">
    $(function () {
    $("#example").DataTable();
  });
  </script>
</body>
</html>
