$(document).ready(function() {
	var data = "Core Selectors Attributes Traversing Manipulation CSS Events Effects Ajax Utilities".split(" ");
	$("#category").autocomplete(data,
	{
        'mustMatch':true,
        'multiple':false
	});
});
