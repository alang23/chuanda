var p = {};

// 账号设置
p.home_setting = function(jsHome){

	function slideUpAll(){
        $(".setting-list li").each(function(){
            $(this).find('dt').removeClass('dt-active');
            $(this).find('dd').slideUp('fast');
        });
    }

    function slideTo(id){
        var _this = $("#"+id).find('dt');
        var isActive = _this.hasClass('dt-active');
        if(!isActive){
            _this.addClass('dt-active');
            _this.siblings('dd').slideDown('fast');

        }else{
            _this.removeClass('dt-active');
            _this.siblings('dd').slideUp('fast');
        }
    }
    
    

    $(".setting-list li").each(function(){
        var _this = $(this);
        _this.find('dt').click(function(){
            var _id = _this.attr('id');
            if('#'+_id == location.hash){
                return false;
            }

            slideUpAll();

            var _scroll = $(document).scrollTop();
            //alert(_scroll);
            
            location.hash = '#'+_id;
            
            setTimeout(function(){
                $(document).scrollTop(_scroll);
            },0);

            slideTo(_id);
        });
    });

    var pageArr = ['password','pay','privacy','account'];
    var _to = location.hash.substr(1);
    if(jQuery.inArray(_to,pageArr)>-1){
        slideTo(_to);
    }

    $LAB.script(jsHome+'lg.js?v=0.0.1')
        .script(jsHome+'lib/http.js?v=0.0.1')
        .script(jsHome+'plugin/register.js?v=0.0.1')
        .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
        .script(jsHome+'vender/jquery.placeholder.js?v=2.0.8')
        .wait(function(){
            
            $('input, textarea').placeholder();
            
            var r = new UpdatePassword('form1');
            var r2 = new setPayPassword('form2');

            $("#send-mobile-captcha").click(function(){
                var _btn = $(this);
                _btn.text('正在发送...');
                setTimeout(function(){
                    var rs = sendMobileMsg('updatepwd');
                    if(rs){
                        _btn.text('已经发送到您手机(59)');
                    }else{
                        _btn.text('发送失败，请刷新页面重试');
                    }
                },800);
            });

            $("#to-reset-pay-step2").click(function(){

                //这里需要验证是否已填写验证码以及验证码是否正确
                var _val = $("#mobile-captcha").val();
                if(_val.length<4){
                    layer.alert('请输入验证码');
                    return false;
                }
                $("#reset-pay-step1").hide();
                $("#reset-pay-step2").show();
            });

        });
}



//我的关注
p.home_follw = function(jsHome){

    $("#home-avatar").mouseover(function(){
        $(this).siblings('#home-avatar-set').show();
    });
    $("#home-avatar-set").mouseover(function(){
        $(this).show();
    }).mouseout(function(){
        $(this).hide();
    });

    $("#class-drop").hover(function(){
        $("#class-drop-meau").show();
    });

    $("#class-drop-meau").hover(function(){
        $("#drop-box-class").find('.caret').addClass('caret_rotate');
    },function(){
        $("#drop-box-class").find('.caret').removeClass('caret_rotate');
        $(this).hide();
    });

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


}


//日志详情
p.home_diary_view = function(jsHome){

    
}

//我的衣柜
p.home_my_chest = function(jsHome){

    $("#home-avatar").mouseover(function(){
        $(this).siblings('#home-avatar-set').show();
    });
    $("#home-avatar-set").mouseover(function(){
        $(this).show();
    }).mouseout(function(){
        $(this).hide();
    });


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
                'uploader'      : hostname+'index.php?c=underwear&m=add',
                'onUploadSuccess' :function(file, data, response){
                    $("#uploaded_list").find('#upid_'+upid).html('<img src="'+hostname+'uploads/member/clothespress/'+data+'" width="158px" />');
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
					
					var _id = $(this).attr('data-id');
                    var _data = getEquip(_id);
                    var _wrap = $('#form1');
					
					$("#itemid").val(_id);

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
                //var _id = $(this).attr('data-id');
				var _id = $("#itemid").val();
				//alert(_id);
				
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

//创建新日记
p.addDiary = function(jsHome){


    function eachSpendGrid(arr){
        $('#test-grid li').each(function(){
            var _val = $(this).find('input').val();
            if(_val.length<1){
                $(this).find('input').val(arr['id'])
                $(this).find('.img-wrap').html('<img src="'+arr['url']+'" />');
                return false;
            }
        });
    }

     $LAB.script(jsHome+'lg.js?v=0.0.1')
        .script(jsHome+'lib/http.js?v=0.0.1&r='+Math.random())
        .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
        .script(jsHome+'vender/uploadify/jquery.uploadify.min.js?v=3.2.1')
        .wait(function(){

            var up = $("#file_upload").uploadify({
                'queueID'  : 'queue',
                'progressData' : 'percentage',
                'queueSizeLimit' : 13,
                'fileSizeLimit' : '204800KB',
                'swf'           : jsHome+'vender/uploadify/uploadify.swf',
                'uploader'      : hostname+'index.php?c=daily&m=add_pic',
                'onUploadSuccess' :function(file, data, response){
					var picdir = hostname+'uploads/member/daily/'+data;
                   $("#upload-show-btn").hide();
                   $("#upload-show-pic").html('<img src="'+picdir+'" />');
                   $("#upload_show_val").val(data);
                },
                'onUploadProgress' : function(file, bytesUploaded, bytesTotal, totalBytesUploaded, totalBytesTotal) {
                    var percent = Math.floor((bytesUploaded/bytesTotal)*100);
                    
                },
                'onSelect' : function(file) {
                   
                }
            });


            $("#test-chest-list li a").each(function(){

                $(this).click(function(){
                    var _id = $(this).attr('data-id');
                    var _url = $(this).find('img').attr('src');
                    var arr = [];
                    arr['id'] = _id;
                    arr['url'] = _url;
                    eachSpendGrid(arr);
                });


            });






        });


    


}