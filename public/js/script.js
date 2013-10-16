$(document).ready(function($) {
	$('#priceRange').change(function() {
		$('#priceInput').val($(this).val());
	});

	$('#sortAZ').click(function() {
		$('#sortAZ').css("display", "none");
		$('#sortZA').css("display", "inline");
	});

	$('#sortZA').click(function() {
		$('#sortZA').css("display", "none");
		$('#sortAZ').css("display", "inline");
	});

	$('#ISBN-btn').click(function() {
		$(this).hide();
		$('#ISBN').show("drop", {direction: "right"}, "linear");
	});

	$('#search-btn').click(function() {
		$(this).hide();
		$('#searchbar').show("drop", {direction: "right"}, "linear");
	});
});