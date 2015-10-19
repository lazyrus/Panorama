$(document).ready( function() {
	console.log("ENOUGH!!");

	var projectNameSubstring = window.location.search.substring(1);
	console.log( "Project Name url substring : "+projectNameSubstring);
	substr = projectNameSubstring.split('=');
	console.log("Substrings splitted!!");
	console.log("substring[0] : " + substr[0] );
	k = substr[0];
	console.log("substring[1] : " + substr[1] );
	v = substr[1];

	var wrapper = {
		init: function() {
			$.ajax({
				type: "GET",
				// url: "/api/webservice.php",
				url: "/api/webservice.php?fetch=project&"+projectNameSubstring,
				data: { /*fetch: "project", project: substr[1]*/ },
				success: function( resp ) {
					console.log(resp);
					jsonObj = JSON.parse( resp );
					console.log(jsonObj.response);
				}
			});
		}
	}

	$(document).on("click", "li", function() {
		$('li').removeClass('active');
		$(this).addClass('active');
		var moduleName = $(this).attr('name');
		// console.log(moduleName);

		$('.module-tabs').addClass('hidden');
		$('#'+moduleName).removeClass('hidden');
	});

	wrapper.init();
});