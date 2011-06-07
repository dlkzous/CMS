<?

//check form submitted
function form_submitted(){
	if(isset($_POST['submit_check']) && $_POST['submit_check'] == "true"){
		return true;
	}else return false;
}

?>
