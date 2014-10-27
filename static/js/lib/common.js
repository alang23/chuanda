/*function*/
function checkedAll(btnInput,btnSelectAll,inputEach,isCheckBtn){

	var _checkedAll = $(btnInput).attr('checked');

	var toSelectAll = false;
	if(isCheckBtn==true && _checkedAll=='checked'){

		toSelectAll = true;

	}else if(isCheckBtn==false && _checkedAll!='checked'){
		toSelectAll = true;

	}else{
		toSelectAll = false;
	}


	if(!toSelectAll){
		$(btnInput).attr('checked',false)
		$(btnSelectAll).html('全选');

		$(inputEach).each(function(){
			$(this).find('input[type="checkbox"]').attr('checked',false);
		});

	}else{
		$(btnInput).attr('checked',true)
		$(btnSelectAll).html('取消全选');

		$(inputEach).each(function(){
			$(this).find('input[type="checkbox"]').attr('checked',true);
		});
	}
}


function getChecked(inputEach,type,separator){
	var _s = '';
	var _a = [];
	var sep = '';

	if(separator==undefined){
		separator = "|";
	}

	$(inputEach).each(function(){
		var _this = $(this).find('input[type="checkbox"]');
		if(_this.attr('checked')=='checked'){
			_s+=sep+_this.val();
			_a.push(_this.val());
			sep = separator;
		}
	})

	if(type=='array'){
		return _a;
	}else{
		return _s;
	}
	

}