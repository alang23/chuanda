var daren = {

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

	},
	'diaryInit':function(jsHome){


	},
	'shopSetting':function(jsHome){

		

	},
	'commentInit':function(jsHome){


	},
	'infoInit':function(jsHome){

	},
	'followInit':function(jsHome){

		$("#myhome-follow-article li .follow-avatar").each(function(){
	        $(this).hover(function(){
	            console.log('dd');
	            $(this).find('.follow-detail').stop(true,false).fadeIn('fast');
	        },function(){
	            $(this).find('.follow-detail').stop(true,false).fadeOut('fast');
	        });

	        $(this).find('.follow-detail').hover(function(){
	            //$(this).show();
	        },function(){
	            //$(this).hide();
	        });
	    });

		$LAB.script(jsHome+'lg.js?v=0.0.1')
        .script(jsHome+'lib/http.js?v=0.0.1')
        .wait(function(){
            
           $('.follow-btn').each(function(){
                var _this = $(this);
                _this.find('a.lg-btn').click(function(){
                    var rs = followOne($(this).attr('data-id'),$(this).attr('data-isfollow'));
                    if(rs && rs.code==0){
                        $(this).attr('data-isfollow',rs.isfollow);
                        if(rs.isfollow=='yes'){
                            $(this).removeClass('lg-btn-primary').addClass('lg-btn-wire').text('取消关注');
                        }else{
                            $(this).removeClass('lg-btn-wire').addClass('lg-btn-primary').text('+ 关 注');
                        }
                    }
                });
           });

        });




	},
	'chestInit':function(jsHome){

		$LAB.script(jsHome+'lg.js?v=0.0.1')
        .script(jsHome+'lib/http.js?v=0.0.1&r='+Math.random())
        .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
        .script(jsHome+'vender/uploadify/jquery.uploadify.min.js?v=3.2.1')
        .wait(function(){
 
            var id = 0;
            var upid = 0;
            var upArr = [];
            var up = $("#file_upload").uploadify({
                'queueID'  : 'queue',
                'progressData' : 'percentage',
                'queueSizeLimit' : 13,
                'fileSizeLimit' : '204800KB',
                'swf'           : jsHome+'vender/uploadify/uploadify.swf',
                'uploader'      : 'http://localhost/uploadify.php',
                'onUploadSuccess' :function(file, data, response){
                    $("#uploaded_list").find('#upid_'+upid).html('<img src="'+data+'" width="158px" />');
                    upArr.push(data);
                    upid+=1;
                },
                'onUploadProgress' : function(file, bytesUploaded, bytesTotal, totalBytesUploaded, totalBytesTotal) {
                    var percent = Math.floor((bytesUploaded/bytesTotal)*100);
                    $("#uploaded_list").find('#upid_'+upid).children('.p2').html('正在上传 '+percent+'%');
                },
                'onSelect' : function(file) {
                    var _li ='<li id="upid_'+id+'"><p>'+file.name+'</p><p class="p2">正在上传</p></li>'
                    $("#uploaded_list").append(_li);
                    id+=1;
                    var len = $('#uploaded_list li').length;
                    $('#tocal-uploads-num').html(len);
                }
           
            });

            $('#myhome-chest-list li').each(function(){
                var _this = $(this);
                _this.hover(function(){
                    _this.find('.chest-list-info').stop(true,false).fadeIn('fast');
                },function(){
                     _this.find('.chest-list-info').stop(true,false).fadeOut('fast');
                });

                _this.click(function(){
                    $("#chest-detail-box").hide();
                    $("#chest-detail-loading").show();

                    $.layer({
                        type: 1,
                        shade: [0],
                        area: ['auto', 'auto'],
                        title: '详情',
                        border: [0],
                        shade: [0.6, '#000'],
                        shadeClose:true,
                        move:false,
                        page: {dom : '#chest-detail-wrap'}
                    });

                    var _id = $(this).attr('data-id');
                    var _data = getEquip(_id);
                    var _wrap = $('#form1');

                    if(_data && _data.code==0){
                        $("#chest-detail-box").show();
                        $("#chest-detail-loading").hide();

                        $("#pic-show-box").html('<img src="'+_data.data.pic+'" />');
                        $('#d-type').val(_data.data.d_type);
                        $('#d-style').val(_data.data.d_style);
                        $('#d-class').val(_data.data.d_class);
                        $("#d-star").val(_data.data.star);
                        $("#d-prize_min").val(_data.data.prize_min);
                        $("#d-prize_max").val(_data.data.prize_max);

                        for(var i=0,len=_data.data.season.length;i<len;i++){
                            _wrap.find('input[name="season"]').each(function(){
                                if($(this).attr('value')==_data.data.season[i]){
                                    $(this).attr('checked',true);
                                }
                            });
                        }
                    }else{
                        $("#chest-detail-loading").html('<span class="tip-error">加载失败...请刷新页面重试！</span>');
                    }

                });

                
            });

            $("#chest-detail-submit").click(function(){
               
                $("#chest-detail-submit-tip").html('正在保存...');
                var _id = $(this).attr('data-id');
                var obj = {}
                obj.d_type = $('#d-type').val();
                obj.d_style = $('#d-style').val();
                obj.d_class = $('#d-class').val();
                obj.season = $('#season').val();
                obj.star = $('#star').val();
                obj.prize_min = $('#prize_min').val();
                obj.prize_max = $('#prize_max').val();


                setTimeout(function(){

                    var rs = updateEquip(_id,obj);
                    if(rs && rs.code==0){
                        $("#chest-detail-submit-tip").html('<span class="tip-success">保存成功,2秒钟后窗口自动关闭</span>');
                        setTimeout(function(){
                            location.reload();
                        },1500);
                    }else{
                        $("#chest-detail-submit-tip").html('<span class="tip-error">保存失败，请刷新页面重试</span>');
                    }

                },800);


            });


            $('#chest-upload-btn').click(function(){
                $("#uploaded_list").html('');
                $('#tocal-uploads-num').html(0);
                id = 0;
                upid = 0;
                upArr = [];
                $.layer({
                    type: 1,
                    shade: [0],
                    area: ['auto', 'auto'],
                    title: '上传衣饰',
                    border: [0],
                    shade: [0.6, '#000'],
                    shadeClose:true,
                    move:false,
                    page: {dom : '#chest-upload-box'}
                });

            });





            $("#upload-submit-btn").click(function(){
                $("#upload-submit-tip").html('正在保存...,请不要关闭窗口.');
                setTimeout(function(){
                    var rs = addChestPic(upArr);
                    if(rs && rs.code==0){
                        $("#upload-submit-tip").html('<span class="tip-success">保存成功,2秒钟后窗口自动关闭</span>');
                        setTimeout(function(){
                            location.reload();
                        },1500);
                    }else{
                        $("#upload-submit-tip").html('<span class="tip-error">保存失败，请刷新页面重试!</span>');
                    }

                },800);
            });
        });
		




	}





};

