function addwishlist(){

	let book = document.getElementById('book').value;

	if (book=="") {
		alert("Give book name please...");
	}else{
		const http = new XMLHttpRequest();
		http.open('GET', `../model/wishlistModel.php?add=${book}`, true);
		http.send();
		
		http.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				alert("Book added",window.location = "wishlist.php");
			}
		}		
	}

}

function rmvwishlist(){

	let book = document.getElementById('book').value;

	if (book=="") {
		alert("Give book name please...");
	}else{
		const http = new XMLHttpRequest();
		http.open('GET', `../model/wishlistModel.php?rmv=${book}`, true);
		http.send();
		
		http.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				alert("Book removed",window.location = "wishlist.php");
			}
		}		
	}

}