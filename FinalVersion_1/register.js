	/*	$("#register").click (function(){
				
					$.post ($("#register-form").attr("action"),
							$("#register-form : input").serializeArray(),
							function(info){
								$("#display").empty();
								$("#display").html(info);
							});
						$("#register-form").submit(function(){
							return false;
						});

						});		*/		
	
	$("#register").click( function() {
 
	 $.post( $("#register-form").attr("action"),
	         $("#register-form :input").serializeArray(),
			 function(info) {
 
			   $("#display").empty();
			   $("#display").html(info);
				clear();
			 });
 
	$("#register-form").submit( function() {
	   return false;	
	});
});
 
function clear() {
 
	$("#register-form :input").each( function() {
	      $(this).val("");
	});
 
}