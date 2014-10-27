var value = 0;
var selectViewWidth = 280;
var selectViewHeight = 286;
var avatarBtn = {'btn_upload':'avatarBtn','file_upload':'avatarFile'}
var avatar_handle = null;

function avatar_init(){
	$("#"+avatarBtn.btn_upload).click(function(){
		$("#avatarFile").trigger("click");
	});
	$("#"+avatarBtn.file_upload).change(function(){
		selectViewImg('avatarFile');
	});
	imgSelectedInit();
}

function getFileUrl(sourceId) {
	var url;
	if (navigator.userAgent.indexOf("MSIE")>=1) { // IE
		url = document.getElementById(sourceId).value;
	} else if(navigator.userAgent.indexOf("Firefox")>0) { // Firefox
		url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0));
	} else if(navigator.userAgent.indexOf("Chrome")>0) { // Chrome
		url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0));
	}
	return url;
}

function selectViewImg(sourceId) {
	var url = getFileUrl(sourceId);
	var img = document.createElement('img');
	img.src = url;
	img.onload = function(){

		if(img.width<140 || img.height<140){
			layer.msg('图片尺寸不能小于140*140',1,{type: 1,shade: false});
			return false;
		}

		var align = selectViewAlign(img.width,img.height);
		$('#avatarSelectTip').hide();
		$("#avatar").attr({'src':url}).css({'width':align.width+'px','height':align.height+'px','top':align.top+'px','left':align.left+'px'}).show();
		$("#avatar1").attr('src',url);
		$("#avatar2").attr('src',url);
		imgSelected();
	}

}

function selectViewAlign(w,h){
	var rs = {};
	var ratio = h/w;
	if(w>=h){
		rs.width=selectViewWidth;
		rs.height=selectViewWidth*ratio;
		rs.top = (selectViewHeight-rs.height)/2;
		rs.left = 0;
	}else{
		rs.height = selectViewHeight;
		rs.width = selectViewHeight/ratio;
		rs.top = 0;
		rs.left = (selectViewWidth-rs.width)/2;
	}
	return rs;
}


///////////////

function adjust(el, selection) {
	var scaleX = $(el).width() / (selection.width || 1);
	var scaleY = $(el).height() / (selection.width || 1);
	$(el+' img').css({
		width: Math.round(scaleX*$('#avatar').width() ) + 'px',
		height: Math.round(scaleY*$('#avatar').height() ) + 'px',
		marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
		marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
	});
}
function preview(img, selection) {
	//alert('dda');
	adjust('#img_small_preview', selection);
	adjust('#img_big_preview', selection);
}

function avatarrotateleft(){
	value -=90;
	$('#avatar').rotate({ animateTo:value});
	$('#avatar1').rotate({ animateTo:value});
	$('#avatar2').rotate({ animateTo:value});
	$('#id_rotation').val(value);
}

function avatarrotateright(){
	value +=90;
	$('#avatar').rotate({ animateTo:value});
	$('#avatar1').rotate({ animateTo:value});
	$('#avatar2').rotate({ animateTo:value});
	$('#id_rotation').val(value);
	//console.log(avatar_handle);
	//avatar_handle.update();
}

function select_avatar(){
	$('#avatar_id').click();
}
function uploadavatar(){
	$('#avatar_form').submit();
}
function submit_avatar(){
	alert('修改成功,大家可以自定义from跳转路径');
	$('#crop_form').submit();
} 
function imgSelectedInit(){

	avatar_handle = null;
	
	avatar_handle = $('img#avatar').imgAreaSelect({
		aspectRatio: "4:4", 
		x1: 0,
		y1:0,
		x2: 100,
		y2: 100,
		instance:true,
		onSelectEnd:function(img, selection) {
			$('#id_top').val(selection.y1);
			$('#id_left').val(selection.x1);
			$('#id_right').val(selection.x2);
			$('#id_bottom').val(selection.y2);
		},
		onSelectChange: preview
	});
}
function imgSelected(){
	$("#btn_submit_wrap").show();

	var _top = parseInt($("#avatar").css('top'));
	var _left = parseInt($("#avatar").css('left'));
	var _width = parseInt($("#avatar").css('width'));
	var _height = parseInt($("#avatar").css('height'));

	var _minWidth = 100;
	var _minHeight = 100; 
	
	if(_width<_minWidth){
		_minWidth = _width;
	}
	if(_height<_minHeight){
		_minHeight = _height;
	}
	var toLeft = (_width-_minWidth)/2;

	avatar_handle.setSelection(toLeft,0,(toLeft+_minHeight),(0+_minHeight));
	avatar_handle.update();
	var s = avatar_handle.getSelection();
	preview($('img#avatar'),s);
}