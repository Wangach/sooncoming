let myForm = document.getElementById('subscribers');
myForm.onsubmit = function(e){
	e.preventDefault();
	alert("Form Has Been Submitted!");
}