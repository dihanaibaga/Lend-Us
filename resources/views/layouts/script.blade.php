 <!-- BEGIN: Vendor JS-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
 <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
 <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
 <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <!-- END: Page JS-->

 <script>
     $(window).on('load', function() {
         if (feather) {
             feather.replace({
                 width: 14,
                 height: 14
             });
         }
     })
 </script>