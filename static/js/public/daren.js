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
	            //console.log('dd');
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
		




	},
    'orderInit':function(jsHome){

        $('.order-fast-btn').each(function(){

            $(this).hover(function(){
                $(this).siblings('.order-fast-view').show();
            },function(){
                $(this).siblings('.order-fast-view').hide();
            });
        });

        $LAB.script(jsHome+'lg.js?v=0.0.1')
            .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
            .script(jsHome+'lib/http.js?v=0.0.2')
            .script(jsHome+'lib/common.js?v=0.0.1')
            .wait(function(){

                $('.order-article .order-refuse-btn').each(function(){
                    var _this = $(this);
                    _this.click(function(){
                        var _id = $(this).attr('data-id');
                        $('#dialog-refuse').find('#refuseId').val(_id);
                        $.layer({
                            type: 1,
                            shade: [0],
                            area: ['auto', 'auto'],
                            title: false,
                            border: [0],
                            shade: [0.6, '#000'],
                            shadeClose:true,
                            move:false,
                            page: {dom : '#dialog-refuse'}
                        });

                    });
                });

                $('.order-article .order-accept-btn').each(function(){
                    var _this = $(this);
                    _this.click(function(){

                        

                        layer.alert('此订单已移至穿搭订单列表', 10,!1);

                    });





                });

                $('#dialog-refuse').find('input[type="submit"]').click(function(e){
                    
                    var data = {};
                    var order_id = $("#refuseId").val();
                    data.less_yy = $("#less_yy").val();
                    data.less_time = $("#less_time").val();
                    data.less_txt = $("#less_txt").val();

                    $('#order-refuse-tip').html('正在提交中...');

                    setTimeout(function(){
                        var rs = orderRefuse(order_id,data);
                        if(rs && rs.code==0){
                            $('#order-refuse-tip').html('提交成功!本弹窗将在3秒钟后自动关闭.');
                            setTimeout(function(){
                                location.reload();
                            },2500);
                        }else{
                            $('#order-refuse-tip').html('提交失败：'+rs.msg);
                        }
                    },800);

                    

                    return false;
                });







            });




    },
    'orderStep1_init':function(jsHome){

        $LAB.script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
            .script(jsHome+'lib/http.js?v=0.0.2')
            .script(jsHome+'lib/common.js?v=0.0.1')
            .script(jsHome+'vender/jquery.cookie.js?v=1.4.1')
            .wait(function(){
                
                var yin = stringToArr($.cookie("yin")) || [];
                console.log('yin:'+yin);

                $('#myhome-chest-list li').each(function(){
                    var _this = $(this);
                    _this.hover(function(){
                        _this.find('.chest-list-info').stop(true,false).fadeIn('fast');
                    },function(){
                         _this.find('.chest-list-info').stop(true,false).fadeOut('fast');
                    });

                    var _id = $(this).attr('data-id');

                    if($.inArray(_id,yin)>-1){
                        $(this).find('input[type="checkbox"]').attr('checked',true);
                        $(this).find('.chest-icon').show();
                        $(this).find('.chest-list-info').children('a').text('取消隐藏'); 
                    }

                    var _this_check = $(this).children('.combo-checkbox').find('input[type="checkbox"]');
                    $(this).children('.chest-list-info').children('a').click(function(){
                        
                        var checked = _this_check.attr('checked');
                        if(checked=='checked'){
                            var _val = _this_check.val();
                            //console.log('remove val:'+_val);
                            _this_check.attr('checked',false);
                            _this.find('.chest-icon').hide();
                            $(this).text('点击隐藏');
                            //从arr中删除,更新cookie
                            var _key = $.inArray(_val, yin);
                            yin.splice(_key,1);
                            //console.log('remove arr:'+_key);

                        }else{
                            var _val = _this_check.val();
                            _this_check.attr('checked',true);
                            _this.find('.chest-icon').show();
                            $(this).text('取消隐藏');
                            //添加到arr,更新cookie
                            var _key = $.inArray(_val, yin);
                            if(_key<0){
                                yin.push(_val);
                                //console.log('add arr:'+_val);
                            }
         
                        }
                        $.cookie("yin",arrToString(yin));
                        console.log('yin:'+yin);
                    });

                });

            });


        
    },
    'orderStep2_init':function(jsHome){

        $LAB.script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
            .script(jsHome+'lib/http.js?v=0.0.2')
            .script(jsHome+'lib/common.js?v=0.0.1')
            .script(jsHome+'vender/jquery.cookie.js?v=1.4.1')
            .wait(function(){

                var you = $.cookie("you") || -1;

                var selectFirst = null;
                $('#myhome-chest-list li').each(function(){
                    var _this = $(this);
                    _this.hover(function(){
                        _this.find('.chest-list-info').stop(true,false).fadeIn('fast');
                    },function(){
                         _this.find('.chest-list-info').stop(true,false).fadeOut('fast');
                    });

                    var _id = $(this).attr('data-id');
                    if(_id==you){
                        $(this).find('input[type="checkbox"]').attr('checked',true);
                        $(this).find('.chest-icon').show();
                        $(this).find('.chest-list-info').children('a').text('取消优选');
                    }

                    var _this_check = $(this).children('.combo-checkbox').find('input[type="checkbox"]');
                    $(this).children('.chest-list-info').children('a').click(function(){

                        var checked = _this_check.attr('checked');
                        if(checked=='checked'){
                            _this_check.attr('checked',false);
                            _this.find('.chest-icon').hide();             
                            $(this).text('点击优选');

                        }else{
                            
                            //删除其它选择
                            clearAllSelected_step2();

                            selectFirst = _this_check.val();
                            _this_check.attr('checked',true);
                            _this.find('.chest-icon').show();
                            $(this).text('取消优选');
                            you = _this_check.val();
                            $.cookie("you",you);

                        }

                       
                    });
                });






            });



        


    }





};



function clearAllSelected_step2(){

    $('#myhome-chest-list li').each(function(){
        var _this = $(this);
        var _ck = _this.find('input[type="checkbox"]');
        if(_ck.attr('checked')=='checked'){
            _ck.attr('checked',false);
            _this.find('.chest-list-info').find('a').text('点击优选');
            _this.find('.chest-icon').hide();
        }
    });
}


function stringToArr(string){
    if(typeof(string)!='string'){
        return false;
    }
    var arr = string.split(',');
    return arr;
}

function arrToString(arr){
    if(!$.isArray(arr)){
        return false;
    }
    return arr.toString();
}


