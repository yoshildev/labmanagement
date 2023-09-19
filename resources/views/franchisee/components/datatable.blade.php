<link rel="stylesheet" type="text/css"
    href="{{ asset('franchisee_assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css?v=1.1') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('franchisee_assets/assets/pages/data-table/css/buttons.dataTables.min.css?v=1.1') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('franchisee_assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css?v=1.1') }}">
<!-- data-table js -->
<script src="{{ asset('franchisee_assets/bower_components/datatables.net/js/jquery.dataTables.min.js?v=1.1') }}">
</script>
<script
    src="{{ asset('franchisee_assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js?v=1.1') }}">
</script>
<script src="{{ asset('franchisee_assets/assets/pages/data-table/js/jszip.min.js?v=1.1') }}"></script>
<script src="{{ asset('franchisee_assets/assets/pages/data-table/js/pdfmake.min.js?v=1.1') }}"></script>
<script src="{{ asset('franchisee_assets/assets/pages/data-table/js/vfs_fonts.js?v=1.1') }}"></script>
<script src="{{ asset('franchisee_assets/bower_components/datatables.net-buttons/js/buttons.print.min.js?v=1.1') }}">
</script>
<script src="{{ asset('franchisee_assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js?v=1.1') }}">
</script>
<script
    src="{{ asset('franchisee_assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js?v=1.1') }}">
</script>
<script
    src="{{ asset('franchisee_assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js?v=1.1') }}">
</script>
<script
    src="{{ asset('franchisee_assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js?v=1.1') }}">
</script>

<script>
    $('#scr-vtr-dynamic').DataTable({
        //scrollY: '50vh',
        scrollCollapse: true,
        ordering: false
        //paging: false
    });
    </script>
    <script>
    function swalmodal(id, thislocation){
        $(this).parent().parent().remove();
        swal({
            title: "Do you want to delete?",
            text: "NOTE : Once deleted, data cannot be recovered.",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        }, function () {
            setTimeout(function (){
                $.ajax({
                  url: 'ajax/ajaxdelete',
                  data: 'id=' + id,
                  cache: false,
                  success: function(data){
                      if(data == "SUCCESS"){
                        swal("Deleted Successfully!");
                        $(thislocation).parent().parent().remove();
                      } else {
                        swal("Unable to delete!");
                      }
                  }
                });
            }, 2000);
        });
    }
    </script>   