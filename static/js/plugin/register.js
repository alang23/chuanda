function RegVerify(id){
	this.wrap = $('#'+id);
	this.check();
}

RegVerify.prototype.check = function(){
	var _this = this;

	//用户名
	_this.wrap.find("#username").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();
		if(!(/^1[3|4|5|7|8][0-9]\d{8}$/.test(val))){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('手机号码有误');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		//查询后台检测
		var rs = false;
		if(rs==true){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('该手机号码已存在');
			return false;
		}
	});


	//密码
	_this.wrap.find("#password").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();

		if(val.length<6 || val.length>16){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}
		
		var s = strongMatch(val);
		if(s==1 || s==2 || s==4){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码需要数字与字母组合');
			return false;
		}

		if(!(/^[A-Za-z0-9]+$/.test(val))){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
		
	}).keyup(function(){
		//密码强度
		var val = $(this).val();
		var s = strongMatch(val);
		if(s==7 && val.length>=8){
			_this.wrap.find("#password-strong").children('ul').attr('class','strong3');
		}else if((s==7 && val.length>=6) || ((s==3 || s==5) && val.length>=8)){
			_this.wrap.find("#password-strong").children('ul').attr('class','strong2');
		}else if((s==3 || s==5) && val.length>=6){
			_this.wrap.find("#password-strong").children('ul').attr('class','strong1');
		}else{
			_this.wrap.find("#password-strong").children('ul').attr('class','strong0');
		}
	});

	
	

	//确认密码
	_this.wrap.find("#c_password").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();
		var _val = _this.wrap.find("#password").val();
		if(val.length<1){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写确认密码');
			return false;
		}
		if(val!=_val){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('两次密码不一致');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	//验证码
	_this.wrap.find("#captcha").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();
		if(val.length<1){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写验证码');
			return false;
		}
	});

	//点击发送验证码
	_this.wrap.find('#getCaptcha-btn').click(function(){
		var _this = $(this);
		_this.html('正在发送...');
			var rs = sendMobileMsg();
		setTimeout(function(){
			if(rs){
				_this.html('已发送到您手机(59)');
			}else{
				_this.parent().siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('验证码发送失败,请重试！');
				return false;
			}
		},1000);
	});


	//点击提交
	_this.wrap.find("input[type='submit']").click(function(){

		var _uname = _this.wrap.find("#username");
		if(!(/^1[3|4|5|7|8][0-9]\d{8}$/.test(_uname.val()))){ 
			_uname.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('手机号码有误');
			_uname.focus();
			return false;
		}else{
			_uname.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		//...
		var _pwd = _this.wrap.find("#password");
		var _pval = _pwd.val();
		if(_pval.length<6 || _pval.length>16){
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pwd.focus();
			return false;
		}else if(!(/^[A-Za-z0-9]+$/.test(_pval))){ 
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pwd.focus();
			return false;
		}else{
			_pwd.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		//...
		var _cpwd = _this.wrap.find("#c_password");
		if(_cpwd.val().length<1){
			_cpwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写确认密码');
			_cpwd.focus();
			return false;
		}else if(_cpwd.val()!=_pval){
			_cpwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('两次密码不一致');
			_cpwd.focus();
			return false;
		}else{
			_cpwd.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}


		//...
		var _captcha = _this.wrap.find("#captcha");
		if(_captcha.val().length<1){
			_captcha.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写验证码');
			_captcha.focus();
			return false;
		}else{
			_captcha.siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
		}
		return true;
	});


}


function LoginVerify(id){
	this.wrap = $('#'+id);
	this.check();
}

LoginVerify.prototype.check = function(){


	var _this = this;

	//用户名
	_this.wrap.find("#username").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();
		if(!(/^1[3|4|5|7|8][0-9]\d{8}$/.test(val))){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('手机号码有误');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	//密码
	_this.wrap.find("#password").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();

		if(val.length<6 || val.length>16){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}else if(!(/^[A-Za-z0-9]+$/.test(val))){ 
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}	
	});


	//验证码
	_this.wrap.find("#captcha").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();
		if(val.length<1){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写验证码');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
		}
	});



	
	_this.wrap.find("input[type='submit']").click(function(){
		//...
		var _uname = _this.wrap.find("#username");
		if(!(/^1[3|4|5|7|8][0-9]\d{8}$/.test(_uname.val()))){ 
			_uname.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('手机号码有误');
			_uname.focus();
			return false;
		}else{
			_uname.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		//...
		var _pwd = _this.wrap.find("#password");
		var _pval = _pwd.val();
		if(_pval.length<6 || _pval.length>16){
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pwd.focus();
			return false;
		}else if(!(/^[A-Za-z0-9]+$/.test(_pval))){ 
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pwd.focus();
			return false;
		}else{
			_pwd.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		//...
		var _captcha = _this.wrap.find("#captcha");
		if(_captcha.val().length<1){
			_captcha.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写验证码');
			_captcha.focus();
			return false;
		}else{
			_captcha.siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
		}
		return true;
	});
}



function UpdatePassword(id){
	this.wrap = $('#'+id);
	this.check();
}

UpdatePassword.prototype.check = function(){

	var _this = this;
	_this.wrap.find('#old_password').blur(function(){

		if($(this).val().length<1){
			
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写你的旧密码');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

	});

	//密码
	_this.wrap.find("#password").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();

		if(val.length<6 || val.length>16){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}
		
		var s = strongMatch(val);
		if(s==1 || s==2 || s==4){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码需要数字与字母组合');
			return false;
		}

		if(!(/^[A-Za-z0-9]+$/.test(val))){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});
	//确认密码
	_this.wrap.find("#c_password").focus(function(){
		//$(this).siblings('.item-tip').removeClass('form-right form-error').addClass('form-alert').html('');
	}).blur(function(){
		var val = $(this).val();
		var _val = _this.wrap.find("#password").val();
		if(val.length<1){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写确认密码');
			return false;
		}
		if(val!=_val){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('两次密码不一致');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
	});

	_this.wrap.find("#update-pwd-btn").click(function(){
		var _btn = $(this);
		var _old = _this.wrap.find('#old_password');
		var _pwd = _this.wrap.find("#password");
		var _cpwd = _this.wrap.find("#c_password");

		var _old_val = _old.val();
		var _pwd_val = _pwd.val();
		var _cpwd_val = _cpwd.val();


		if(_old_val.length<1){
			_old.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写你的旧密码');
			_old.focus();
			return false;
		}else{
			_old.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		if(_pwd_val.length<6 || _pwd_val.length>16){
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pwd.focus();
			return false;
		}
		
		var s = strongMatch(_pwd_val);
		if(s==1 || s==2 || s==4){
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码需要数字与字母组合');
			_pwd.focus();
			return false;
		}

		if(!(/^[A-Za-z0-9]+$/.test(_pwd_val))){
			_pwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pwd.focus();
			return false;
		}else{
			_pwd.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		if(_cpwd_val.length<1){
			_cpwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请填写确认密码');
			_cpwd.focus();
			return false;
		}
		if(_cpwd_val!=_pwd_val){
			_cpwd.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('两次密码不一致');
			_cpwd.focus();
			return false;
		}else{
			_cpwd.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}
		$("#update-pwd-tip").html('正在提交中...');
		_btn.removeClass('lg-btn-primary').addClass('lg-btn-default disabled');
		_btn.attr('disabled','disabled');
		setTimeout(function(){

			
			var rs = updatePwd(_old_val,_pwd_val,_cpwd_val);
			if(rs && rs.code==0){
				$("#update-pwd-tip").html('更改成功');
				_btn.removeClass('lg-btn-default disabled').addClass('lg-btn-primary');
				_btn.removeAttr('disabled');
			}else{
				$("#update-pwd-tip").html('更改失败：'+rs.msg);
			}

		},1000);


	});



}


function setPayPassword(id){
	this.wrap = $('#'+id);
	this.check();
}

setPayPassword.prototype.check = function(){
	var _this = this;
	_this.wrap.find('#pay_password').blur(function(){

		var val = $(this).val();

		if(val.length<6 || val.length>16){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}
		
		var s = strongMatch(val);
		if(s==1 || s==2 || s==4){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码需要数字与字母组合');
			return false;
		}

		if(!(/^[A-Za-z0-9]+$/.test(val))){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

	});

	_this.wrap.find('#s_pay_password').blur(function(){

		var val = $(this).val();
		var _val = _this.wrap.find("#pay_password").val();
		if(val.length<1){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请确认您的支付密码');
			return false;
		}
		if(val!=_val){
			$(this).siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('两次密码不一致');
			return false;
		}else{
			$(this).siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		
	});

	_this.wrap.find('input[type="submit"]').click(function(){

		var _pay = _this.wrap.find('#pay_password');
		var _spay = _this.wrap.find('#s_pay_password');

		var _pay_val = _pay.val();
		var _spay_val = _spay.val();

		
		if(_pay_val.length<6 || _pay_val.length>16){
			_pay.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pay.focus();
			return false;
		}
		
		var s = strongMatch(_pay_val);
		if(s==1 || s==2 || s==4){
			_pay.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码需要数字与字母组合');
			_pay.focus();
			return false;
		}

		if(!(/^[A-Za-z0-9]+$/.test(_pay_val))){
			_pay.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('密码为6-16位数字与字母组合');
			_pay.focus();
			return false;
		}else{
			_pay.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		if(_spay_val.length<1){
			_spay.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('请确认您的支付密码');
			_spay.focus();
			return false;
		}
		if(_spay_val!=_pay_val){
			_spay.siblings('.item-tip').removeClass('form-right form-alert').addClass('form-error').html('两次密码不一致');
			_spay.focus();
			return false;
		}else{
			_spay.siblings('.item-tip').removeClass('form-error form-alert').addClass('form-right').html('');
		}

		return true;


	});





}



function strongMatch(val){
	var lv = 0;
	var v1 = 1;
	var v2 = 2;
	var v3 = 4;
	if(val.match(/[A-Z]/g)){
		lv+=v3;
	}
    if(val.match(/[a-z]/g)){
    	lv+=v2;
    }
    if(val.match(/[0-9]/g)){
    	lv+=v1;
    }
    return lv;
}