function purchaseValidation(){
	
	let category = document.getElementById('incategory').value;
	let book_name = document.getElementById('inbookname').value;
	let author = document.getElementById('inauthor').value;
	let bkash = document.getElementById('bkash').checked;
 	let nagad = document.getElementById('nagad').checked;

			if(category == ""){
			document.getElementById('categoryS').innerHTML = "please fill up the category ";
			return false;
			}		

			if(book_name == ""){
			document.getElementById('book_nameS').innerHTML = "please fill up the book name";
			return false;
			}


			if(author == ""){
				document.getElementById('authorS').innerHTML = "please fill up the author";
				return false;
			}
			

			if((bkash=="")&&(nagad=="")){
				document.getElementById('payment').innerHTML = "please select payment method";
				return false;
			}
			
			


	

}




function categorynotnull(){	

	   		let category = document.getElementById('incategory').value;

			if(category != ''){
				document.getElementById('category').innerHTML = "";
			}else{
				return false;
			}
			
 }



 function booknamenotnull(){

 	        let book_name = document.getElementById('inbookname').value;

			if(book_name != ''){
				document.getElementById('book_name').innerHTML = "";
			}else{
				return false;
			}
			
 }







function authornotnull(){
   

   			let author = document.getElementById('inauthor').value;

			if(author != ''){
				document.getElementById('author').innerHTML = "";
			}else{
				return false;
			}
			

 }

 function gendernotnull(){
   

   			let bkash = document.getElementById('bkash').checked;
 	        let nagad = document.getElementById('nagad').checked;

			if((bkash != '')||(nagad!='')){
				document.getElementById('payment').innerHTML = "";
			}else{
				return false;
			}
			

 }













  