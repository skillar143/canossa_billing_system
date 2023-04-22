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



    </script>
