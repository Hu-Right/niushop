<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"template/wap\default_new\Index\search.html";i:1555393972;s:34:"template/wap\default_new\base.html";i:1555393973;s:38:"template/wap\default_new\urlModel.html";i:1555393984;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/search.css">

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
	

	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<div class="search-wrapper">
	<div class="search-header">
		<div class="search-box-button">
			<input type="text" name="" placeholder="请搜索商品名称" class="input"> 
			<i class="gphicon sear icon-search"></i>
		</div> 
		<a href="javascript:;" class="search">搜索</a>
	</div> 

	<div class="search-container">
		<div class="com-bscroll-wrapper">
			<div class="bscroll-y" style="transition-property: transform; transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1); transition-duration: 0ms; transform: translate(0px, 0px) scale(1) translateZ(0px);">
				<?php if(!(empty($hot_keys) || (($hot_keys instanceof \think\Collection || $hot_keys instanceof \think\Paginator ) && $hot_keys->isEmpty()))): ?>
				<div class="search-card-head" style="pointer-events: auto;">热门搜索</div> 
				<div class="search-list-hot" style="pointer-events: auto;">
					<?php if(is_array($hot_keys) || $hot_keys instanceof \think\Collection || $hot_keys instanceof \think\Paginator): if( count($hot_keys)==0 ) : echo "" ;else: foreach($hot_keys as $key=>$vo): ?>
						<a href="<?php echo __URL('APP_MAIN/goods/goodssearchlist?search_name='.$vo.'&shop_id='.$shop_id); ?>"><?php echo $vo; ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div> 
				<?php endif; ?>
				<div class="search-card-head" style="pointer-events: auto;">历史搜索</div> 
				<div class="search-list-history" style="pointer-events: auto;"> 
					<?php if(!(empty($searchRecord) || (($searchRecord instanceof \think\Collection || $searchRecord instanceof \think\Paginator ) && $searchRecord->isEmpty()))): if(is_array($searchRecord) || $searchRecord instanceof \think\Collection || $searchRecord instanceof \think\Paginator): if( count($searchRecord)==0 ) : echo "" ;else: foreach($searchRecord as $key=>$so): ?>
							<a href="<?php echo __URL('APP_MAIN/goods/goodssearchlist?search_name='.$so.'&shop_id='.$shop_id); ?>" class="item"><?php echo $so; ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<p class="item center clear-search-list"><i class="gphicon icon-delete"></i> 清空搜索记录</p>
					<?php else: ?>
						<p class="item center">您还没有搜索记录</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	

	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script type="text/javascript">
$(function(){
	$('.search').click(function(){
		var search = $('.input').val();
		var shop_id = $('#hidden_shop_id').val();
		search = search.replace(/</g,"&lt;").replace(/>/g,"&gt;")

		if(search.length > 0){
			if($.cookie("searchRecordWap") != undefined){
				var arr = eval($.cookie("searchRecordWap"));
			}else{
				var arr = new Array();
			}

			if(arr.length >0 ){
				if($.inArray(search,arr)< 0){
					arr.push(search);
				}
			}else{
				arr.push(search);
			}
			$.cookie("searchRecordWap",JSON.stringify(arr));

			location.href= __URL(APPMAIN+"/goods/goodssearchlist?search_name="+search+"&shop_id="+shop_id);
		}
	})

	$(".clear-search-list").click(function(){
		$(".search-list-history").html('<p class="item center">您还没有搜索记录</p>');
		$.removeCookie('searchRecordWap');
	})
})
</script>

</body>
</html>