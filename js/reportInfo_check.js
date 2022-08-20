function ajax(){

	let name = document.getElementById('name').value;
	const http = new XMLHttpRequest();
	http.open('POST', `../controller/reportInfo_check.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`name=${name}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}