$(document).ready(function() {     	
	$('#createModal').click(function(){
		$('#Modal').modal('show');
		$('#modalForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Create Ticket");
		$('#action').val('createModa');
		$('#save').val('Save Ticket');
	});
});
// //  * Modal popup
// // Get the modal
// var modal = $('#modalDialog');

// // Get the button that opens the modal
// var btn = $("#mbtn");

// // Get the  element that closes the modal
// var span = $(".close");

// $(document).ready(function(){
//     // When the user clicks the button, open the modal 
//     btn.on('click', function() {
//         modal.show();
//     });
    
//     // When the user clicks on  (x), close the modal
//     // span.on('click', function() {
//     //     modal.hide();
//     // });
// });

// // When the user clicks anywhere outside of the modal, close it
// $('body').bind('click', function(e){
//     if($(e.target).hasClass("modal")){
//         modal.hide();
//     }
// });