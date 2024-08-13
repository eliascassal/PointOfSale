
<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Un sistema de punto de venta
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2024 <a href="https://ekesoft.net">EliasCassal </a>.</strong> Derechos reservados
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assest/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assest/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assest/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assest/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assest/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assest/plugins/jszip/jszip.min.js"></script>
<script src="assest/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assest/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="assest/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="assest/js/usuario.js"></script>
<script src="assest/js/cliente.js"></script>
<!--<script src="assest/js/producto.js"></script>
<script src="assest/js/factura.js"></script>-->

<!--===============
seccion de modals
=================-->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content" id="content-default">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- jquery-validation -->
<script src="assest/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assest/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assest/plugins/jquery-validation/localization/messages_es.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
</body>
</html>
