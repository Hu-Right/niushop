<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"template/wap\default_new\Member\memberCoupon.html";i:1555393985;s:34:"template/wap\default_new\base.html";i:1555393973;s:38:"template/wap\default_new\urlModel.html";i:1555393984;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var UPLOADCOMMENT = '<?php echo UPLOAD_COMMENT; ?>';// 存放评论
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	img_lazyload();
});

//页面底部选中
function bottomActive(event){
	clearButton();
	if(event == "#bottom_home"){
		$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#bottom_classify"){
		$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#bottom_stroe"){
		$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//图片懒加载
function img_lazyload(){
	$("img.lazy_load").lazyload({
		threshold : 0,
		effect : "fadeIn", //淡入效果
		skip_invisible : false
	})
}
</script>
<style>
body{max-width: 640px;}
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:25%;font-size:14px;}
*{user-select: text;-webkit-user-select: text;-moz-user-select: text;}
</style>

    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_common.css">
    <style>
.coupon-price {
    position: absolute;
    top: 35%;
    left: 10%;
    font-size: 25px;
    color: #fff;
}
.coupon-lose{
    position: absolute;
    top: 67%;
    left: 10%;
    font-size: 14px;
    color: #fff;
}
.due-img{
	display: block;
    position: absolute;
    top: 40%;
    bottom: 10%;
    left: 50%;
    right: 22%;
    background: url(__TEMP__/<?php echo $style; ?>/public/images/stamp-due.png) no-repeat;
    background-size: auto 100%;
}
.com_content li {
    width: 100%;
    position: relative;
    float: left;
    margin-top: 10px;
	background: #fff;
    padding: 5px;
	list-style: none;
}
.title{
	font-weight:bold;
	color:#707070;
	font-size: 1rem;
}
.clearfloat{
	content: '';
    display: inline-block;
    clear: both;
    width: 100%;
}
ul{
	
}
div.p-r{
	border-radius: 10px;
}
</style>

</head>
<input type="hidden" id="system_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="system_url_model" value="<?php echo url_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#system_rewrite_model").val()==1 || $("#system_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#system_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
/**
 * 处理图片路径
 */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<body class="body-gray" style="margin:auto;">
	
<section class="head">
		<a class="head_back" id="backoutapp" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title"><?php echo lang('member_my_coupon'); ?></div>
	</section>

	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
 
  <div class="cf-container" data-reactid="2">
   		<div class="cf-edge" data-reactid="3"></div>
		<ul class="cf-content" data-reactid="4">
   			<li class="cf-tab-item select" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(1);"><?php echo lang('unused'); ?></a></li>
			<li class="cf-tab-item" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(2);"><?php echo lang('used'); ?></a></li>
			<li class="cf-tab-item" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(3);"><?php echo lang('expire'); ?></a></li>
			
    	</ul>
	</div>
  
    <div class="com_content">
    	<div class="coupon-contianer">
    		
    	</div>
    </div>
<script type="text/javascript">
	$(function(){
		$('.cf-container .cf-tab-item').click(function(){
       		$('.cf-container .cf-tab-item').removeClass('select');
       		$(this).addClass('select');
       	})
		getMemberCounponList(1);
	})
	function getMemberCounponList(type){
		$.ajax({
			type:'post',
			async:true,
			url:'<?php echo __URL('APP_MAIN/member/membercoupon'); ?>',
			data:{'type':type },
			dataType:'json',
			success:function(data){
				var listhtml='';
				if(data.length>0){
					for(var i=0;i<data.length;i++){
						var money = data[i]['money'] != null ? data[i]['money'] : "";
						var coupon_code = data[i]['coupon_code'] != null ? data[i]['coupon_code'] : "";
						var coupon_name = data[i]['coupon_name'] != null ? data[i]['coupon_name'] : "";
						var start_time = data[i]['start_time'] != null ? data[i]['start_time'] : "";
						var end_time = data[i]['end_time'] != null ? data[i]['end_time'] : "";
						var at_least = data[i]['at_least'];
						if(type != 1){
							listhtml += '<div class="coupon-item used">';
						}else{
							listhtml += '<div class="coupon-item">';
						}
							listhtml += '<div class="coupon-type">';
							listhtml += '</div>';
							listhtml += '<section>';
								listhtml += '<div class="coupon-title"><i>￥</i><em>'+ money +'</em></div>';
								listhtml += '<div class="coupon-time">'+start_time+' 至 '+end_time+'</div>';
							listhtml += '</section>';
						listhtml += '</div>';
						listhtml += '<div class="coupon-desc">';
							listhtml += '满'+at_least+'元可用';
						listhtml += '</div>';
					}
				}else{
					listhtml += '<div class="coupon-empty">';
						listhtml += '<p>您还没有';
						switch(type){
							case 1:
								listhtml += "<?php echo lang('unused'); ?>";
							break;
							case 2:
								listhtml += "<?php echo lang('used'); ?>";
							break;
							case 3:
								listhtml += "<?php echo lang('expire'); ?>";
							break;
						}
						listhtml += '优惠券</p>';
					listhtml += '</div>';
				}
				$('.com_content .coupon-contianer').html(listhtml);
			}
		})
	}

    $("#backoutapp").click(function (){
        var json ={
        		"center" : "1",
            }
        window.webkit.messageHandlers.center.postMessage(json);
    })
</script>


	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>