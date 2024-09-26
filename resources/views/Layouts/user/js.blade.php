<!-- General JS Scripts -->
<script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('assets/js/CodiePie.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('assets/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/modules/chart.min.js')}}"></script>
<script src="{{asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{asset('assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('assets/modules/cleave-js/dist/cleave.min.js')}}"></script>
<script src="{{asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>



<!-- Page Specific JS File -->
<script src="{{asset('assets/js/page/index.js')}}"></script>
<script src="{{asset('assets/js/page/index-0.js')}}"></script>
<script src="{{asset('assets/js/page/auth-register.js')}}"></script>
<script src="{{asset('assets/js/page/bootstrap-modal.js')}}"></script>
<script src="{{asset('assets/js/page/components-chat-box.js')}}"></script>
<script src="{{asset('assets/js/page/components-multiple-upload.js')}}"></script>
<script src="{{asset('assets/js/page/components-statistic.js')}}"></script>
<script src="{{asset('assets/js/page/components-table.js')}}"></script>
<script src="{{asset('assets/js/page/modules-sweetalert.js')}}"></script>
<script src="{{asset('assets/js/page/modules-toastr.js')}}"></script>
<script src="{{asset('assets/js/page/index-0.js')}}"></script>


<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>


<!-- other script -->
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

<!-- succes message timeout -->
<script>
    // Set a timer to remove the message after 10 seconds
    setTimeout(function() {
        var toastMessage = document.getElementById('toast-message');
        if (toastMessage) {
            toastMessage.remove();
        }
    }, 4000); // 10000 milliseconds = 10 seconds
</script>