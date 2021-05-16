$('form.ajax').on('submit', function () {
	// body...
	var that = $(this),
	url = that.attr('action'),
	type = that.attr('method'),
	data = {};

	that.find('[name]').each(function(index, value){
		var that = $(this),
		name = that.attr('name'),
		value = that.val();
		
		data[name] = value;
	});

	console.log(data);

	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response){
			console.log(response);
			document.getElementById("msg").style.display = "block";
			document.getElementById("mymsg").innerHTML = "<strong>Thank You</strong> For Writing to us we will get back to you as soon as possible";
		},
		error: function (data) {
            document.getElementById("msg").style.display = "block";
			document.getElementById("mymsg").innerHTML = "<strong>Error in submitting</strong";
            }
	});
	
	document.getElementById("myform").reset();
	return false;
});