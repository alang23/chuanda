var order = {

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
                        var _id = $(this).attr('data-id');
                        var rs = orderAccept(_id);
                        if(rs && rs.code==0){
                            layer.alert('此订单已移至穿搭订单列表', 10,!1);
                        }else{
                            layer.alert('操作失败，请刷新重试。', 10,!1);
                        }
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
    'acceptedInit':function(jsHome){

        $('.order-fast-btn').each(function(){
            $(this).hover(function(){
                $(this).siblings('.order-fast-view').show();
            },function(){
                $(this).siblings('.order-fast-view').hide();
            });
        });
    },
    'fansOrderInit':function(jsHome){




    },
    'chuandaInit':function(jsHome){

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

    },
    'uploadShowInit':function(jsHome){

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
                'uploader'      : 'http://localhost/uploadify.php',
                'onUploadSuccess' :function(file, data, response){
                   $("#upload-show-btn").hide();
                   $("#upload-show-pic").html('<img src="'+data+'" />');
                   $("#upload_show_val").val(data);
                },
                'onUploadProgress' : function(file, bytesUploaded, bytesTotal, totalBytesUploaded, totalBytesTotal) {
                    var percent = Math.floor((bytesUploaded/bytesTotal)*100);
                    
                },
                'onSelect' : function(file) {
                   
                }
            });
        });


    }
}


