$(document).ready(function() {

	$('form').submit(function(event){
		event.preventDefault();

		var task = $('.something').val();
		 
		 $.ajax({
		 	url: "/submit.php",
		 	type: "POST",
		 	data: {'task': task}
		 });
		 alert("Added the task " + task);
	});

});
