<!-- jQuery-V1.12.4 -->
<script src="{{asset('platform/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('platform/assets/js/vendor/popper.min.js')}}"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="{{asset('platform/assets/js/bootstrap.min.js')}}"></script>
<!-- Ajax Mail js -->
<script src="{{asset('platform/assets/js/ajax-mail.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('platform/assets/js/jquery.meanmenu.min.js')}}"></script>
<!-- Wow.min js -->
<script src="{{asset('platform/assets/js/wow.min.js')}}"></script>
<!-- Slick Carousel js -->
<script src="{{asset('platform/assets/js/slick.min.js')}}"></script>
<!-- Owl Carousel-2 js -->
<script src="{{asset('platform/assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{asset('platform/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{asset('platform/assets/js/isotope.pkgd.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{asset('platform/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Mixitup js -->
<script src="{{asset('platform/assets/js/jquery.mixitup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('platform/assets/js/jquery.countdown.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('platform/assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('platform/assets/js/waypoints.min.js')}}"></script>
<!-- Barrating -->
<script src="{{asset('platform/assets/js/jquery.barrating.min.js')}}"></script>
<!-- Jquery-ui -->
<script src="{{asset('platform/assets/js/jquery-ui.min.js')}}"></script>
<!-- Venobox -->
<script src="{{asset('platform/assets/js/venobox.min.js')}}"></script>
<!-- Nice Select js -->
<script src="{{asset('platform/assets/js/jquery.nice-select.min.js')}}"></script>
<!-- ScrollUp js -->
<script src="{{asset('platform/assets/js/scrollUp.min.js')}}"></script>
<!-- Main/Activator js -->
<script src="{{asset('platform/assets/js/main.js')}}"></script>
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