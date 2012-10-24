<?php

/*
    Test data -----
    http://localhost/learning/mod2/registration.php?nama_depan=arif&nama_belakang=setyawan&tanggal_lahir=1988&jk=pria&kota=malang&propinsi=jawa timur&negara=indonesia&email=fooster9090@gmail.com&password=test&cpassword=test&profile=profile

    
http://localhost/learning/mod2/registration.php?nama_depan=arif&nama_belakang=setyawan&tanggal_lahir=1988/04/23&jk=pria&kota=malang&propinsi=jawa%20timur&negara=indonesia&email=fooster9090@gmail.com&password=test&cpassword=test&profile=profile
*/

$error = false;
$req = '';
$msg = array();

$remote_address = $_SERVER['REMOTE_ADDR'];

if($remote_address=='::1')
    $remote_address = '127.0.0.1';
$callback_url = 'http://'.$remote_address.''.$_SERVER['REQUEST_URI'];

if(!empty($_POST)){
	$req = $_POST;
} else if(!empty($_GET)){
	$req = $_GET;
} else {
    include 'error.php';
    die();
}

if(!empty($req)){
	$nama_depan     = $req['nama_depan'];
	$nama_belakang 	= $req['nama_belakang'];
	$tanggal_lahir 	= $req['tanggal_lahir'];
	$jenis_kelamin	= $req['jk'];
	$kota			= $req['kota'];
	$propinsi		= $req['propinsi'];
	$negara			= $req['negara'];
	$email			= $req['email'];
	$password		= $req['password'];
	$cpassword		= $req['cpassword'];
	$profile		= $req['profile'];
	
	$remote_address = $_SERVER['REMOTE_ADDR'];
	
	$arr_data = array($nama_depan, $nama_belakang, $tanggal_lahir, $jenis_kelamin, $kota, $propinsi, $negara, $email, $password, $cpassword, $profile);
	
	if(in_array('',$arr_data)){
	    echo 'data yang penting ada yang kosong, silakan pastikan local filter anda tepat!';
	} else {
	    
	    if(preg_match('/\D/',$nama_depan)){} else {$error = true; $msg[] = "nama depan tidak sesuai dengan format";}
	    if(preg_match('/\D/',$nama_belakang)){} else {$error = true; $msg[] = "nama belakang tidak sesuai dengan format";}
	    if(preg_match("([\d]{4}/[\d]{2}/[\d]{2})", $tanggal_lahir)){} else {$error = true; $msg[] = "tanggal lahir tidak sesuai dengan format yyyy/mm/dd";}
	    if(preg_match('/\w+@\w+\.\w{2,4}/',$email)){} else {$error = true; $msg[] = "email tidak sesuai dengan format";}
	    
	    if($error){
	        echo 'filter local tidak tepat<br/>';
	        foreach ($msg as $key => $value) {
	           echo $value."<br/>";
	        }
	    } else{
	        echo 'selamat data anda sudah benar.';
	    }
	}
	
} else {
    include 'error.php';
    die();
}

?>