$(document).ready( function() {
	console.log("ENOUGH!!");

	$(document).on("click", "li", function() {
		$('li').removeClass('active');
		$(this).addClass('active');
		var moduleName = $(this).attr('name');
		console.log(moduleName);

		$('.module-tabs').addClass('hidden');
		$('#'+moduleName).removeClass('hidden');
	});

});