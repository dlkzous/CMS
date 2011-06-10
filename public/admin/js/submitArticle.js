$(document).ready(function() {
	var catUrl = BASE_URL+"article/getCategories";
	$.post(catUrl, function(data) {
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
	 
	 var tagsUrl = BASE_URL+"tag/getTags";
	 $.post(tagsUrl, function(data) {
		var tags = data.split(",");
		$("#tags").autocomplete(tags,
		{
		    'multiple':true
		});
	 });
});
