function validation(){
	let bookName = document.getElementById('bn').value;
	let authorsName = document.getElementById('an').value;
	let publisher = document.getElementById('p').value;
	let edition = document.getElementById('e').value;
	let quantity = document.getElementById('q').value;


			if(bookName== ""){
			document.getElementById('bookN').innerHTML = "**please fill the book name field**";
			return false;
			}		
					


			if( authorsName== ""){
			document.getElementById('authorsN').innerHTML = "**please fill the authors name field**";
			return false;
			}

			if( publisher== ""){
			document.getElementById('authorsN').innerHTML = "**please fill the authors name field**";
			return false;
			}

			if( edition== ""){
			document.getElementById('editions').innerHTML = "**please fill the authors name field**";
			return false;
			}

			if(Status== ""){
			document.getElementById('statuss').innerHTML = "**please fill the authors name field**";
			return false;
			}

			if(quantity== ""){
			document.getElementById('quantitys').innerHTML = "**please fill the authors name field**";
			return false;
			}

	function bookNamenull(){
   

   			let  bookName= document.getElementById('bn').value;

			if(bookName != ''){
				document.getElementById('bookN').innerHTML = "";
				return false;
			}
		}

		function authorsNamenull(){
   

   			let  authorsName= document.getElementById('an').value;

			if(authorsName != ''){
				document.getElementById('authorsN').innerHTML = "";
				return false;
			}
		}

		function publishernull(){
   

   			let  publisher= document.getElementById('p').value;

			if(publisher != ''){
				document.getElementById('publishers').innerHTML = "";
				return false;
			}
		}

		function editionnull(){
   

   			let  edition= document.getElementById('e').value;

			if(edition != ''){
				document.getElementById('editions').innerHTML = "";
				return false;
			}
		}

		function statussnull(){
   

   			let  status= document.getElementById('s').value;

			if(status != ''){
				document.getElementById('statusss').innerHTML = "";
				return false;
			}
		}
