
<script src="{{ asset('js/font-awesome.min.js') }}" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
 {{-- <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
 <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script> --}}

<!-- Page level plugins -->
 <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>


 <!-- Page level custom scripts -->
 <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

<script>
/**
 * this script is for fetching data from table to modal
 */


/** Fee Edit */
  $('.edit-fee').each(function() {
   $(this).click(function(event){
     $('#feeUpdate').attr("action", "http://localhost/canossa_billing_system/public/fee/update/"+($(this).data('id'))+"");
     $('#edescription').val($(this).data('description'));
     $('#eamount').val($(this).data('amount'));
   })
  });
/** Fee Delete */
  $('.delete-fee').each(function() {
   $(this).click(function(event){
     $('#feeDelete').attr("action", "http://localhost/canossa_billing_system/public/fee/delete/"+($(this).data('id'))+"");
     $('#des').val($(this).data('description'));
     $('#amt').val($(this).data('amount'))
   })
  });

    //{{---------------------------------}}}//

/** Discount Edit */
  $('.edit-discount').each(function() {
   $(this).click(function(event){
     $('#discountUpdate').attr("action", "http://localhost/canossa_billing_system/public/discount/update/"+($(this).data('id'))+"");
     $('#edes').val($(this).data('description'));
     $('#eamt').val($(this).data('amount'));
   })
  });
/** Discount Delete */
  $('.delete-discount').each(function() {
   $(this).click(function(event){
     $('#discountDelete').attr("action", "http://localhost/canossa_billing_system/public/discount/delete/"+($(this).data('id'))+"");
     $('#ddes').val($(this).data('description'));
     $('#damt').val($(this).data('amount'))
   })
  });
/** Course Fee */
$('.add-feeOSF').each(function() {
   $(this).click(function(event){
     $('#feeAddOSF').attr("action", "http://localhost/canossa_billing_system/public/managefees/add/"+($(this).data('courseid'))+"/"+($(this).data('type'))+"/"+($(this).data('sem'))+"/"+($(this).data('year'))+"");
     $('#titleOSF').text("Other School Fee")
  })
 });
$('.add-feeCF').each(function() {
 $(this).click(function(event){
   $('#feeAddCF').attr("action", "http://localhost/canossa_billing_system/public/managefees/add/"+($(this).data('courseid'))+"/"+($(this).data('type'))+"/"+($(this).data('sem'))+"/"+($(this).data('year'))+"");
   $('#titleCF').text("Computer Fee")
 })
});
$('.add-feeSF').each(function() {
  $(this).click(function(event){
    $('#feeAddSF').attr("action", "http://localhost/canossa_billing_system/public/managefees/add/"+($(this).data('courseid'))+"/"+($(this).data('type'))+"/"+($(this).data('sem'))+"/"+($(this).data('year'))+"");
    $('#titleSF').text("Special Fee")
 })
});
$('.delete-cfee').each(function() {
  $(this).click(function(event){
    $('#courseDelete').attr("action", "http://localhost/canossa_billing_system/public/managefees/delete/"+($(this).data('courseid'))+"/"+($(this).data('id'))+"");
    $('#cdesFee').val($(this).data('description'));
    $('#camtFee').val($(this).data('amount'))
  })
});

/*----------------------------------------------------------------*/

var inactivityTimeout = 30 * 60 * 1000; // 5 seconds in milliseconds
var logoutTimer;

function logout() {
  document.getElementById('logout-form').submit();
}

function startLogoutTimer() {
  logoutTimer = setTimeout(logout, inactivityTimeout);
}

function resetLogoutTimer() {
  clearTimeout(logoutTimer);
  startLogoutTimer();
}


// Attach the resetLogoutTimer function to relevant events such as mousemove, keydown, or touchstart
window.addEventListener('mousemove', resetLogoutTimer);
window.addEventListener('keydown', resetLogoutTimer);
window.addEventListener('touchstart', resetLogoutTimer);

// Start the logout timer when the page loads
startLogoutTimer();

// Attach the logout function to the beforeunload event
window.addEventListener('beforeunload', logout);

    </script>



@yield('scripts')
