$(document).ready(function() {
	var url = BASE_URL+"article/getCategories";
	$.post(url, function(data) {
		alert(data);
		var categories = data.split(",");
		$("#category").autocomplete(categories,
		{
		    'mustMatch':true,
		    'multiple':false
		});
	 });
});
