<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function(){
        $('#pilih').change(function(){
            var pilihan = $(this).val();
            $.ajax({
                url:"<?= base_url(); ?>home/pilih_visit/<?= $pasien['id_pasien']; ?>/<?= $konsultasi['visit']; ?>",
                method:"POST",
                data:{visit:pilihan},
                success:function(data){
                    $('#show-visit').html(data);
                },
                error:function(){
                    alert(pilihan);
                }
            })
        })
    })
</script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>


</body>

</html>