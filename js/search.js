


function ajax(){
	const search = document.getElementById('search').value;
	const http	= new XMLHttpRequest();
	http.open('POST', `searchmember.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`search=${search}`);

	 http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
		
	}
}