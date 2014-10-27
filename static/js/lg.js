/* init js */


$(function(){
	var search_txt = '你根本无法想到TA是如何亲自为宅男粉丝搭配的';

	$("#header-search-input").val(search_txt);

    $("#header-search-input").focusin(function(){
        if($(this).val()==search_txt){
            $(this).val("");
        }
    });
    $("#header-search-input").focusout(function(){
        if($(this).val()==""){
            $(this).val(search_txt);
        }
    });
    $("#header-nav-list > li").each(function(){
		var _this = $(this);

		if($(this).children().is('ul')){

			$(this).children('a').mouseenter(function(){
				$(this).removeClass('nav-default').addClass('nav-hover');
				_this.siblings('li').find('ul').hide();
				_this.find('ul').stop(true,true).fadeIn();
			});

			$(this).mouseleave(function(){
				_this.children('a').removeClass('nav-hover').addClass('nav-default');
				_this.find('ul').stop(true,false).fadeOut();
			});
		}
	});

	$("#nav-drop").hover(function(){
		$("#nav-drop-meau").show();
	});

	$("#nav-drop-meau").hover(function(){
		console.log('in');
		$("#drop-box-nav").find('.caret').addClass('caret_rotate');
	},function(){
		console.log('out');
		$("#drop-box-nav").find('.caret').removeClass('caret_rotate');
		$(this).hide();
	});

	


});