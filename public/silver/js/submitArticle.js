$(document).ready(function() {
	var url = BASE_URL+"article/getCategories";
	$.post(url, function(data) {
		var categories = data.split(",");
		$("#category").autocomplete(categories,
		{
		    'mustMatch':true,
		    'multiple':false,
		    'formatItem':function(item){
		    	var category = item[0].split('|');
		    	return category[0];}
		}).result(function(event,item){
        				$("#catId").val(item[0].split('|')[1]);
    				});
	 });
});
