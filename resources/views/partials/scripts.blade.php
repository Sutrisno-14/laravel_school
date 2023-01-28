<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminLte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminLte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminLte/dist/js/adminlte.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('adminLte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminLte plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminLte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('adminLte/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminLte/plugins/chart.js/Chart.min.js') }}"></script>

<!-- bs-custom-file-input -->
<script src="{{ asset('adminLte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminLte/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
  <script>
    $(function () {
      bsCustomFileInput.init();
    });
 </script>
