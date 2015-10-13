$(document).ready( function() {
	console.log("ENOUGH!!");

	// setTitle() function begins
	/*modalTitle = "Tech Dev Need";
	newhtmlcontent = modalTitle + $('#tech-dev-need-edit-modal .modal-header').html();
	$('#tech-dev-need-edit-modal .modal-header').html(newhtmlcontent);*/
	// setTitle() function ends

	$(document).on("click", "li", function() {
		$('li').removeClass('active');
		$(this).addClass('active');
		var moduleName = $(this).attr('name');
		console.log(moduleName);

		$('.module-tabs').addClass('hidden');
		$('#'+moduleName).removeClass('hidden');
	});

});