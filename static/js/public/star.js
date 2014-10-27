var star = {

	'homeInit':function(jsHome){
		
		$("#class-drop").hover(function(){
	        $("#class-drop-meau").show();
	    });
	    
		$("#class-drop-meau").hover(function(){

	        $("#drop-box-class").find('.caret').addClass('caret_rotate');
	    },function(){
	        $("#drop-box-class").find('.caret').removeClass('caret_rotate');
	        $(this).hide();
	    });
	}



}