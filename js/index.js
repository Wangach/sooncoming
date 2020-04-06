let myForm = document.getElementById('subscribers');
let url = myForm.action
myForm.onsubmit = function(){
	//e.preventDefault();
	//alert("Form Has Been Submitted!");
	let req = new XMLHttpRequest();
	//console.log(req.readyState);
	req.onreadystatechange = function(){
		if (req.readyState == 4) {
			if (req.status == 200) {
				alert(req.responseText);
			}else if(req.status == 404){
				console.log('File Or Resource Not Found!');
			}//console.log(req.status);
		}
	}
	req.open('POST', url, true);
	req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	req.send();
}