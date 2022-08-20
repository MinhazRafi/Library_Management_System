function re(){

	let report = document.getElementById('report').value;
	const http = new XMLHttpRequest();
	http.open('POST', `../controller/reportT_check.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`report=${report}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}