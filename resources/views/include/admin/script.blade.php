<!-- jQuery -->
<script src="{{ url('backend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('backend') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('backend') }}/dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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