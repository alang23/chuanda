/*http interface*/

/*
	通用返回说明
	code = 0  执行成功，正常返回
	code = -1 执行失败，msg相应错误文字

	msg = 'string' 执行错误时，返回相应错误文字，正确时返回ok

 */


/*
 * 发送短信接口
 */
function sendMobileMsg(type){

	return true;

}

/*
 *  更新消息中心状态
 */
function updateMsgRead(){


	return true;
}

/*
 * 消息中心-删除所选消息
 * @ids 所选的值 array
 */
function deleteMsg(ids){

	return true;
}

/*
 * 消息中心-标记已读所选消息
 * @ids 所选的值 array
 */
function readMsg(ids){

	
	return true;
}

/*
 * 送花
 * @action 操作类型 value: add or remove
 */
function sendFlower(action){

	
	return true;
}

/*
 * 关注
 * @id userID
 * @isFollow value: yes or no
 * return json 
 * return isfollow 表示操作完成后，结果是否是关注
 */
function followOne(id,isFollow){

	
	return {"code":0,"isfollow":"yes","msg":"ok"};
}

/*
 * 更改密码
 * @param old_pwd 旧密码
 * @param pwd 新密码
 * @param cpwd 确认新密码
 * return JSON
 */
function updatePwd(old_pwd,pwd,cpwd){
	
	var R;
	
	$.ajax({
		url: hostname+"index.php?c=setting&m=changepwd&rand="+Math.random(),
		
		data: {old_password:old_pwd,password:pwd,c_password:cpwd},
		type:"POST",
		async:false,
		success:function(r){
			//alert(r);
			
		}
	})
	
	
	
	return {"code":0,"msg":"ok"};
}





/*
 * 保存上传好的我的衣柜图片
 * 
 */
function addChestPic(pics){
	//return {"code":0,"msg":"ok"};
	var R;
	$.ajax({
		url: hostname+"index.php?c=underwear&m=add_underwear&rand="+Math.random(),
		dataType:"json",
		data: {arr:pics},
		type:"POST",
		async:false,
		success:function(r){
			R = r;
			
		}
	})
	return R;
}


/*
 * 获取我的衣柜的衣服数据
 * @param id 我的衣柜的某件衣服的ID
 */
function getEquip(id){
	
		var R;
		 var jsonData
		$.ajax({
			url: hostname+"index.php?c=underwear&m=clotherOnejson&rand="+Math.random(),
			dataType:"json",
			data: {id:id},
			type:"GET",
			async:false,
			success:function(r){
				jsonData = eval(r);
				
			}
		})
		
		
	return {"code":0,"data":{"pic":hostname+"uploads\/member\/clothespress\/"+jsonData['imageUrl'],"d_type":jsonData['type'],"d_style":2,"d_class":3,"season":[1,3],"star":3,"prize_min":120,"prize_max":200},"msg":"ok"};

}

/*
 * 保存我的衣柜的衣服数据
 * @param id: 我的衣柜的某件衣服的ID
 * @param data: data source object 
 */
function updateEquip(id,data){

	//data.type
	//data.class
	//data.style
	//data.season
	//data.star
	//data.prize_min
	//data.prize_max
	//alert(data.star);
	/*
	for(i in data){  
   		alert(i)  
    	alert(data[i])   
	} 
	*/
		

		var R;
		var msg = '';
		$.ajax({
			url: hostname+"index.php?c=underwear&m=updateinfo&rand="+Math.random(),
			dataType:"json",
			data: {id:id,type:data.d_type},
			type:"POST",
			async:false,
			success:function(r){
				
				if(r == 1){
					msg = '修改成功';
				}
				
			}
		})
		
		
	
	return {"code":0,"msg":msg};



}
