/*
	@author	: Arif Setyawan
	@build 	: 0.1
*/

function validateForm(){
	
	var check = false;
	
	var nama_depan=document.forms["regForm"]["nama_depan"].value;
	var nama_belakang=document.forms["regForm"]["nama_belakang"].value;
	var tanggal_lahir=document.forms["regForm"]["tanggal_lahir"].value;
	var jenis_kelamin=document.forms["regForm"]["jk"].value;
	var kota=document.forms["regForm"]["kota"].value;
	var propinsi=document.forms["regForm"]["propinsi"].value;
	var negara=document.forms["regForm"]["negara"].value;
	var kota=document.forms["regForm"]["kota"].value;
	var email=document.forms["regForm"]["email"].value;
	var password=document.forms["regForm"]["password"].value;
	var cpassword=document.forms["regForm"]["cpassword"].value;
	var profile=document.forms["regForm"]["profile"].value;
	
	if(!check){
		if(tanggal_lahir == ''){
			document.forms["regForm"]["tanggal_lahir"].setCustomValidity('Date Invalid. Please choose the right date!');
		}
	}	
}

function setDate(){
	var tanggal_lahir_dumy = document.forms["regForm"]["tanggal_lahir_dumy"].value; // ambil tanggal_dumy
	// cara 1
	var tempTTL = tanggal_lahir_dumy.split("-"); // dipakai untuk split tanggal
	var new_tanggal_lahir = tempTTL[0]+"/"+tempTTL[1]+"/"+tempTTL[2]; // buat ngurutin berdasarkan tahun[slash]bulan[slash]tanggal
	
	// cara 2
	// var tempTTL = tanggal_lahir_dumy.replace(/-/g,"/");
	// var new_tanggal_lahir = tempTTL;
	
	document.forms["regForm"]["tanggal_lahir"].value = new_tanggal_lahir; // update value tanggal_lahir
	return true;
}

function validatePass(p1, p2) {
    if (p1.value != p2.value || p1.value == '' || p2.value == '') {
        p2.setCustomValidity('Password salah coy');
    } else {
        p2.setCustomValidity('');
    }
}

function validateDate(input, output){
	
	if(input && input != ''){
		var dummy_date = input.value.split('/');

		if(dummy_date[0]=='undefine' || dummy_date[1]=='undefine'){
			input.setCustomValidity('Date Invalid. Please choose the right date!');
		} else {
			input.setCustomValidity('');
		}
	} else {
		output.setCustomValidity('Date Invalid. Please choose the right date!');
	}
	 
}
