function validation(){

	let username = document.getElementById('inuser').value;
	let password = document.getElementById('inpass').value;
	let cpassword = document.getElementById('incpass').value;
	let name = document.getElementById('inname').value;
	let email = document.getElementById('inemail').value;
	let dob = document.getElementById('indob').checked;
	let male = document.getElementById('male').checked;
 	let female = document.getElementById('female').checked;
 	let other = document.getElementById('other').checked;

	if(username == ""){
		document.getElementById('userN').innerHTML = "**please fill the username field**";
		return false;
	}

	if(password == ""){
		document.getElementById('pass').innerHTML = "**please fill the password field**";
		return false;
	}

	if(password!=cpassword){
		document.getElementById('cpass').innerHTML = " do not match";
		return false;
	}

	if(cpassword == ""){
		document.getElementById('cpass').innerHTML = "**please fill the conform password field**";
		return false;
	}
	
	if(name == ""){
		document.getElementById('name').innerHTML = "**please fill the username field**";
		return false;
	}

	if(email == ""){
		document.getElementById('email').innerHTML = "**please fill the username field**";
		return false;
	}

	/*if(dob == ""){
		document.getElementById('dob').innerHTML = "**please fill the username field**";
		return false;
	}*/

	if((male=="")&&(female=="")&&(other=="")){
		document.getElementById('gender').innerHTML = " *please select*";
		return false;
	}
}




function usernotnull(){

		let username = document.getElementById('inuser').value;


		if((username.length<=2)||(username.length>10))
		{
			document.getElementById('userN').innerHTML = "*username must be in 3 to 10 characters*";
			return false;
		}
		
		if(username != ''){
			document.getElementById('userN').innerHTML = "";
		}
}



function passnotnull(){
		let password = document.getElementById('inpass').value;


		if((password.length<=4)||(password.length>12))
		{
			document.getElementById('pass').innerHTML = "*password must be in 5 to 12 characters*";
			return false;
		}

		if(password!=''){
			document.getElementById('pass').innerHTML = "";
		}
}



function cpassnotnull(){
		let cpassword = document.getElementById('incpass').value;

		if(cpassword!=''){
			document.getElementById('cpass').innerHTML = "*password and confirm password should be similar*";
			return false;
		}
}



function namenotnull(){

		let name = document.getElementById('inname').value;

		if(name != ''){
			document.getElementById('name').innerHTML = "";
		}else{
			document.getElementById('name').innerHTML = "*please type your name here*";
			return false;
		}

}



function emailnotnull(){

		let email = document.getElementById('inemail').value;

		if(email != ''){
			document.getElementById('email').innerHTML = "";
		}else{
			document.getElementById('email').innerHTML = "*please type your email here*";
			return false;		
		}
}




function gendernotnull(){

	let male = document.getElementById('male').checked;
	let female = document.getElementById('female').checked;
	let other = document.getElementById('other').checked;

	if((male != '')||(female!='')||(other!='')){
		document.getElementById('gender').innerHTML = "";
	}else{
		document.getElementById('gender').innerHTML = "*please select your gender*";
		return false;
	}

}



function typenotnull(){

	let member = document.getElementById('member').checked;
	let student = document.getElementById('student').checked;
	let teacher = document.getElementById('teacher').checked;

	if((member != '')||(student!='')||(teacher!='')){
		document.getElementById('type').innerHTML = "";
	}else{
		document.getElementById('type').innerHTML = "*please select user type*";
		return false;
	}

}