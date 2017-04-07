$(document).ready(function() {
	$(document).resize(function(event) {
		/* Act on the event */
	});
	$('.file-img').click(function(event) {
		$('#upload-bd').click();
	});
	$('#upload-bd').change(function() {
		$filename = $('#upload-bd').val();
		$('.filename').text($filename);
	});

    $('#modalConfirm').on('shown.bs.modal', function(e) {
    	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    $('#modalCancel').on('shown.bs.modal', function(e) {
    	$(this).find('.btn-cancel').attr('href', $(e.relatedTarget).data('href'));
    });
    
	$('.check-cs').click(function() {
		setTimeout(function() {
			$('.btn-submit').click();
		},1800);
	});
	
	$('#example').DataTable();
	$('#example_wrapper').children().next().first().children().addClass('table-fluid');
	$('#example_wrapper').children().first().addClass('data-table-header');
	$('#example_wrapper').children().children().children().children().children().removeAttr('class');


	$('#myModal').on('shown.bs.modal', function() {
	  	$(this).find('[autofocus]').focus();
	  	$('.modal-content').click(function(event) {
	  		$(this).find('[autofocus]').focus();	  
	  	});
	});	


});