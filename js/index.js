/*let myForm = document.getElementById('subscribers');
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
}*/
$(document).ready(function() {
	$("form#subscribers").submit(function(event) {

		

		//prevent the default action from happening
		event.preventDefault();
		//show overlay effect
		//$("div#bfore, p#giving").css("display", "block");
		
		//serialize data
		var fodat = $(".subscribers").serialize();
		//
		$.ajax({
			url: $('.subscribers').attr('action'),
			type: 'POST',
			data: fodat,
		})
		.done(function(response) {
			if (response.indexOf('Successfully') > 0) {
				$('div#results').html(response).addClass('alert alert-success');
			}else{
				$('div#results').html(response).addClass('alert alert-danger');
			}
		});
		//Reload The page 5 seconds after press of the submit button
		setTimeout(function(event){
			location.reload();
			$("#mail").val('');
		}, 10000);
	});
});