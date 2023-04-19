<script>
        /**
         * this script is for fetching data from table to modal
         */


    /** Course Edit */
            $('.edit-course').each(function() {
             $(this).click(function(event){
               $('#courseUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Program/Course/Update/"+($(this).data('id'))+"");
               $('#edescription').val($(this).data('description'));
             })
            });
    /** Course Delete */
            $('.delete-course').each(function() {
             $(this).click(function(event){
               $('#courseDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Program/Course/Delete/"+($(this).data('id'))+"");
               $('#course').text($(this).data('description'));
             })
            });

    //{{---------------------------------}}}//

    /** Subject Edit */
            $('.edit-subject').each(function() {
             $(this).click(function(event){
               $('#subjectUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Program/Subject/Update/"+($(this).data('id'))+"");
               $('#subcode').val($(this).data('subcode'));
               $('#subdescription').val($(this).data('description'));
             })
           });

    /** Subject Delete */

           $('.delete-subject').each(function() {
             $(this).click(function(event){
               $('#subjectDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Program/Subject/Delete/"+($(this).data('id'))+"");

               $('#delcode').val($(this).data('subcode'));
               $('#deldesc').val($(this).data('description'));
            })
           });

    //{{---------------------------------}}}//

    /** Faculty Edit */
            $('.edit-faculty').each(function() {
             $(this).click(function(event){
               $('#facultyUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Faculty/Update/"+($(this).data('id'))+"");
               $('#eteacherid').val($(this).data('teacherid'));
               $('#ename').val($(this).data('name'));
               $('#enumber').val($(this).data('number'));
               $('#egender').val($(this).data('sex'));
               $('#eaddress').val($(this).data('address'));
             })
            });

            /** Faculty Delete */

           $('.delete-faculty').each(function() {
             $(this).click(function(event){
               $('#facultyDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Faculty/Delete/"+($(this).data('id'))+"");
             if($(this).data('sex') == "male"){
                $('#person').text("Sir "+$(this).data('name'));
             }
              else{
                $('#person').text("Ms "+$(this).data('name'));
              }




            })
           });
    </script>
