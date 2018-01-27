window.onload = function() {
	$(".work-more-info-toggle").click(function(e) {
	   e.preventDefault();
	   var content_id = $(this).attr("href");
	   $(content_id).toggleClass("toggle-project-info");
	});

};
