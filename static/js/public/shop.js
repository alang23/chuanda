var shop = {};


shop.daren_reg = function(jsHome){

	$LAB.script(jsHome+'vender/uploadify/jquery.uploadify.min.js?v=3.2.1')

        .wait(function(){
        	$('input').placeholder();

        	$("#idcard-show-btn").uploadify({
                'queueID'  : 'queue1',
                'progressData' : 'percentage',
                'queueSizeLimit' : 13,
                'fileSizeLimit' : '2048KB',
                'swf'           : jsHome+'vender/uploadify/uploadify.swf',
                'uploader'      : 'http://chuanda.lg/index.php?c=createshop&m=uploadfile&type=idcard',
                'onUploadSuccess' :function(file, data, response){

					var returndata = eval('(' + data + ')');
					$("#idcard-show").html('<img src="'+returndata.filedir+'" width="120" height="90" />');
                	$("#idcard-show-input").val(returndata.filename);
					
                }
            });

            $("#bust-show-btn").uploadify({
                'queueID'  : 'queue2',
                'progressData' : 'percentage',
                'queueSizeLimit' : 13,
                'fileSizeLimit' : '2048KB',
                'swf'           : jsHome+'vender/uploadify/uploadify.swf',
                'uploader'      : 'http://chuanda.lg/index.php?c=createshop&m=uploadfile&type=photo',
                'onUploadSuccess' :function(file, data, response){
					var returndata = eval('(' + data + ')');
                    $("#bust-show").html('<img src="'+returndata.filedir+'" width="120" height="90" />');
                	$("#bust-show-input").val(returndata.filename);
                }
            });



        });





}












/////////////////
//名人申请表单

var _star_his_tml = '<li><input type="text" name="history" class="form-text form-text-long"><span class="required-dot"><a href="javascript:void(0);" title="增加过往经历" class="lg-btn lg-btn-default lg-btn-wire star-del-history">-</a></span></li>';

function StarVerify(id){
	this.wrap = $('#'+id);
	this.check();
}

StarVerify.prototype.check = function(){

	$('input').placeholder();

	var _this = this;
	_this.wrap.find("#truename").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的真实姓名');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#name").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的艺名');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#idcard").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的身份证号码');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#type").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的职业类型');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#mobile").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的手机号码');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#sns").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的公众平台账号');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#star-add-history").click(function(){
		var _his_wra= $("#star-history");
		var len = _his_wra.find('li').length;
		if(len>4){
			return false;
		}
		
		$(_star_his_tml).appendTo(_his_wra).find('a').click(function(){
			$(this).parents('li').remove();
		});
	});

	_this.wrap.find('input[type="submit"]').click(function(){

		var truename = _this.wrap.find("#truename");
		if(truename.val().length<1){ 
			truename.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的真实姓名');
			truename.focus();
			return false;
		}else{
			truename.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var name = _this.wrap.find("#name");
		if(name.val().length<1){ 
			name.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的艺名');
			name.focus();
			return false;
		}else{
			name.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var idcard = _this.wrap.find("#idcard");
		if(idcard.val().length<1){ 
			idcard.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的身份证号码');
			idcard.focus();
			return false;
		}else{
			idcard.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var type = _this.wrap.find("#type");
		if(type.val().length<1){ 
			type.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的职业类型');
			type.focus();
			return false;
		}else{
			type.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var mobile = _this.wrap.find("#mobile");
		if(mobile.val().length<1){ 
			mobile.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的手机号码');
			mobile.focus();
			return false;
		}else{
			mobile.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var sns = _this.wrap.find("#sns");
		if(sns.val().length<1){ 
			sns.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的公众平台账号');
			sns.focus();
			return false;
		}else{
			sns.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

	});


}



/////
function DarenVerify(id){
	this.wrap = $('#'+id);
	this.check();
}


DarenVerify.prototype.check = function(){

	var _this = this;
	_this.wrap.find("#truename").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的真实姓名');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#idcard").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的身份证号码');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#cardno").blur(function(){
		var val = $(this).val();
		if(val.length<1){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的银行卡号');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#bankname").change(function(){
		var val = $(this).val();
		if(val<1){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请选择您的银行名称');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});


	

	_this.wrap.find('input[type="submit"]').click(function(){

		var truename = _this.wrap.find("#truename");
		if(truename.val().length<1){ 
			truename.focus().siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的真实姓名');
			return false;
		}else{
			truename.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var val = _this.wrap.find('input[name="gender"]:checked').val();
		if(val==undefined){
			_this.wrap.find('input[name="gender"]').focus().siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填选择性别');
			return false;
		}else{
			_this.wrap.find('input[name="gender"]').focus().siblings('.item-tip').removeClass('form-alert form-error').addClass('form-right').html('');
		}

		var idcard = _this.wrap.find("#idcard")
		if(idcard.val().length<1){ 
			idcard.focus().siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的身份证号码');
			return false;
		}else{
			idcard.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}


		var ishow = _this.wrap.find("input[name='idcard-show']");
		if(ishow.val().length<1){
			ishow.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请上传您的你证件照片');
			return false;
		}else{
			ishow.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var bshow = _this.wrap.find("input[name='bust-show']");
		if(bshow.val().length<1){
			bshow.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请上传您的半身照');
			return false;
		}else{
			bshow.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}




		var cardno = _this.wrap.find("#cardno")
		if(cardno.val().length<1){ 
			cardno.focus().siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写您的银行卡号');
			return false;
		}else{
			cardno.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		var bankname = _this.wrap.find("#bankname");
		if(bankname.val()<1){
			bankname.focus().siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请选择您的银行名称');
			return false;
		}else{
			bankname.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}







	});

}