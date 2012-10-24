<?php
// set data untuk login
$data = array(
	'username' => 'lucy',
	'password' => 'test',
);

// logical error
$error = false;

// checking request and grab 'em
if(!empty($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];
} else 	if(!empty($_GET)){
	$username = $_GET['username'];
	$password = $_GET['password'];
} else {
    // set logic error to true if no request available
	$error = true;
}

if(!$error){
	
	if($username == $data['username'] and $password == $data['password']){
		// do some login section
		echo "login sukses";
	} else {
		echo "login error";
	}
	
} else {
    	echo "no data";
}
?>