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


    </script>

@yield('scripts')
