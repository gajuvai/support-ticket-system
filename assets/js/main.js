$(document).ready(function () {
    
    // edit user function 
    $('.edituserbtn').on('click', function () {

        $('#editusermodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        $('#edit_userid').val(data[0]);
        $('#edit_userName').val(data[2]);
        $('#edit_email').val(data[3]);
        $(`#edit_role > option[value=${data[4]}]`).attr('selected', true);
        $(`#edit_status > option[value=${data[5]}]`).attr('selected', true);    
    });

    //   delete user function 
    $('.deleteuserbtn').on('click', function () {

        $('#deleteusermodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        $('#delete_id').val(data[0]);
        
    });
    
    // edit customer function 
    $('.editcustomerbtn').on('click', function () {

        $('#editcustomermodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td","input").map(function () {
            return $(this).text();
        }).get();

        $('#edit_customerid').val(data[0]);
        $('#edit_customername').val(data[2]);
        $('#edit_customeremail').val(data[3]);
        $('#edit_phone_no').val(data[4]); 
        $('#edit_pan_no').val(data[5]);  

        // alter(data); 
    });

     // delete customer function 
    $('.deletecustomerbtn').on('click', function () {

        $('#deletecustomermodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td","input").map(function () {
            return $(this).text();
        }).get();

        $('#delete_cid').val(data[0]);
        // alter(data); 
    });


      // edit ticket function 
    $('.editticketbtn').on('click', function () {

        $('#editticketmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td","input").map(function () {
            return $(this).text();
        }).get();

        $('#edit_ticketid').val(data[0]);
        $('#edit_tickettitle').val(data[2]);
        $('#edit_ticketdescription').val(data[5]);
        // $('#edit_ticketimg').val(data[6]); 
        $(`#edit_ticketstatus > option[value=${data[7]}]`).attr('selected', true);
       
        // alter(data); 
    });

     // close ticket function 
    $('.closeticketbtn').on('click', function () {

        $('#closeticketmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td","input").map(function () {
            return $(this).text();
        }).get();

        $('#delete_cid').val(data[0]);
        // alter(data); 
    });
});


