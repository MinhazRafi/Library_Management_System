function addcustomlist(){

	let book = document.getElementById('book').value;

	if (book=="") {
		alert("Give book name please...");
	}else{
		const http = new XMLHttpRequest();
		http.open('GET', `../model/customlistModel.php?add=${book}`, true);
		http.send();
		
		http.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				alert("Book added",window.location = "customlist.php");
			}
		}		
	}

}

function rmvcustomlist(){

	let book = document.getElementById('book').value;

	if (book=="") {
		alert("Give book name please...");
	}else{
		const http = new XMLHttpRequest();
		http.open('GET', `../model/customlistModel.php?rmv=${book}`, true);
		http.send();
		
		http.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				alert("Book removed",window.location = "customlist.php");
			}
		}		
	}

}