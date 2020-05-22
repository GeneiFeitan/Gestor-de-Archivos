$(document).ready(function() {

	
    $('#inputContra2').keyup(function() {

		var pass1 = $('#inputContra').val();
		var pass2 = $('#inputContra2').val();

		if ( pass1 == pass2 ) {
			
           $('#error2').css("background","url(../img/check.png)");
           $('#ok').css("display","block");
        }else{
            $('#error2').css("background","url(../img/check-.png)");
            $('#ok').css("display","none");
            
        }
            //$('#error2').text("Coinciden").css("color","green");
		//} else {
		//	$('#error2').text("No Coinciden").css("color","red");
		//}
        
       // if(pass2 == ""){
            
        //    $('#error2').text("No se puede dejar en blanco").css("color","red");
       // }

    });

});