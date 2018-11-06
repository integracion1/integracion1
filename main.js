jQuery(document).on('submit', '#', function(event){
	event.preventDefault();

jQuery.ajax({
	url:'',
	type:'POST',
	dataType: 'json',
	data: ,
	beforeSend:function() {
		
	}
})
.done(function(respuesta) {
	console.log("success");
})
.fail(function(resp) {
	console.log("error");
})
.always(function(){
	console.log("complete")
});
});