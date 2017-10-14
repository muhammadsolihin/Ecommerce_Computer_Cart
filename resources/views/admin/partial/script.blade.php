<script src="{{url('assetadmin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{url('assetadmin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assetadmin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('assetadmin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assetadmin/dist/js/app.min.js')}}"></script>
<script>
  $(function () {
    $('#data-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>