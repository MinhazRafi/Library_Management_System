function islamic(){

	let book = document.getElementById('book').value;

	const http = new XMLHttpRequest();
	http.open('GET', `../model/booksModelM.php?islamic=${book}`, true);
	http.send();
	
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let data = JSON.parse(this.responseText);
			let b = "";
			for (var i = 0; i < data.length; i++) {
				b = b+"<li>"+data[i].bookname+"</li><br>";
			}
			document.getElementById('result').innerHTML = b;
		}
	}
}

function bestseller(){

	let book = document.getElementById('book').value;

	const http = new XMLHttpRequest();
	http.open('GET', `../model/booksModelM.php?bestseller=${book}`, true);
	http.send();
	
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let data = JSON.parse(this.responseText);
			let b = "";
			for (var i = 0; i < data.length; i++) {
				b = b+"<li>"+data[i].bookname+"</li><br>";
			}
			document.getElementById('result').innerHTML = b;
		}
	}
}

function educational(){

	let book = document.getElementById('book').value;

	const http = new XMLHttpRequest();
	http.open('GET', `../model/booksModelM.php?educational=${book}`, true);
	http.send();
	
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let data = JSON.parse(this.responseText);
			let b = "";
			for (var i = 0; i < data.length; i++) {
				b = b+"<li>"+data[i].bookname+"</li><br>";
			}
			document.getElementById('result').innerHTML = b;
		}
	}
}

function selfhelp(){

	let book = document.getElementById('book').value;

	const http = new XMLHttpRequest();
	http.open('GET', `../model/booksModelM.php?selfhelp=${book}`, true);
	http.send();
	
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let data = JSON.parse(this.responseText);
			let b = "";
			for (var i = 0; i < data.length; i++) {
				b = b+"<li>"+data[i].bookname+"</li><br>";
			}
			document.getElementById('result').innerHTML = b;
		}
	}
}
