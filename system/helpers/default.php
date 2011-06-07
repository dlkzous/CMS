<?

// dump function (or if you have xdebug you can just use var_dump)
function dump($item, $die=true)
{
    $printString = '<pre>' . print_r($item, true) . '</pre>';
    if($die)
        die($printString);
    else
        echo $printString;
}

//check form submitted
function form_submitted(){
	if(isset($_POST['submit_check']) && $_POST['submit_check'] == "true"){
		return true;
	}else return false;
}

?>
