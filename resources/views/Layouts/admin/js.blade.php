<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('admin/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('admin/assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('admin/assets/js/custom.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('admin/assets/bundles/sweetalert/sweetalert.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('admin/assets/js/page/sweetalert.js')}}"></script>
  <script>
       function confirmation(ev, id) {
              ev.preventDefault();
              var urlToRedirect = document.getElementById('delete-form-' + id).getAttribute('action');
              console.log(urlToRedirect);
              swal({
                            title: "Etes-vous sûr de supprimer ceci",
                            text: "Vous ne pourrez pas annuler cette suppression",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true
                     })
                     .then((willCancel) => {
                            if (willCancel) {
                                   document.getElementById('delete-form-' + id).submit();
                            }
                     });
       }
</script>