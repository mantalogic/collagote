
function menuClick(selected){
	
	try{
		var chs = selected.className;
		var output = document.getElementById('output');
	
		if(chs == 'm1'){
			output = "Hello There";
		} else if(chs == 'm2'){
			var a = 3 + 1 * 5;
			output.innerHTML = a+"<br/>";
			if(a===true){
				output.innerHTML += "comparing : its true<br/>";
			} else {
				output.innerHTML += "comparing : its false<br/>";
			}
			
			var b = a.toExponential(2);
			output.innerHTML += "exponential "+a+"x10^2 : "+b+"<br/>";
			
		} else if(chs == 'm3'){
			var arr_a = ['a','b','c','d','e'];
			var arr_b = ['1','2','3','4'];
			var arr_c = arr_a.concat(arr_b,true);
			var arr_d = arr_a.join("--");
			var arr_e = arr_a.slice(2,3);
			
			output.innerHTML = "a = ["+arr_a+"]<br/>";
			output.innerHTML += "b = ["+arr_b+"]<br/>";
			output.innerHTML += "concate a --> b : ["+arr_c+"]<br/>";
			output.innerHTML += "join a : "+arr_d+"<br/>";
			output.innerHTML += "split a : "+arr_e+"<br/>";
			
			// further implementation is about task
		}
	} catch(error){
		alert('wooops something wrong!');
	}

};


function loadXMLDoc(selected, filename){
	var xmlhttp;
	if (window.XMLHttpRequest){ // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("output").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","dyn/"+filename+".html",true);
	xmlhttp.send();
}

