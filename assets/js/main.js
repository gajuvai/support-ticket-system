$(document).ready(function () {
    
    $('.edituserbtn').on('click', function () {

        $('#editusermodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        $('#edit_userid').val(data[0]);
        $('#edit_userName').val(data[1]);
        $('#edit_email').val(data[2]);
        $(`#edit_role > option[value=${data[3]}]`).attr('selected', true);
        $(`#edit_status > option[value=${data[4]}]`).attr('selected', true);
        
       
    });


    $('.deleteuserbtn').on('click', function () {

        $('#deleteusermodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        $('#delete_id').val(data[0]);
        
    });

});