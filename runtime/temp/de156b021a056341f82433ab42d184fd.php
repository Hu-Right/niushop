<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:60:"template/wap\default_new\Goods\goodsClassificationFloor.html";i:1555393973;s:34:"template/wap\default_new\base.html";i:1555393973;s:38:"template/wap\default_new\urlModel.html";i:1555393984;s:49:"template/wap\default_new\Index\controlSearch.html";i:1555393972;s:82:"template/wap\default_new\CustomTemplate\controlCommonCustomTemplateBaseFooter.html";i:1555393984;s:36:"template/wap\default_new\footer.html";i:1555393984;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/categoryFloor.css">
<style>
.controlSearch {width: 85%;padding: 0;background: none;margin: 8px 0 5px 9%;}
.controlSearch .control-search-input{height: 30px;border-bottom-left-radius: 15px;border-top-left-radius: 15px;overflow: hidden;border-bottom-right-radius: 15px;border-top-right-radius: 15px;}
.controlSearch .control-search-input .search-input {width: 72%;height: 20px;line-height: 20px;margin: 4px 0;padding: 0 15px;border: none;color: #999;float: left;font-size: 13px;background:#EFEFEF;}
.controlSearch .control-search-input .search-button{margin: 4px 0;}
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
	<a class="head_back" id="head_back" href="<?php echo __URL('APP_MAIN'); ?>"><i class="icon-back"></i></a>
	<div class="head-title"><span><script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<div class="controlSearch" onclick="location.href='<?php echo __URL("APP_MAIN/index/search"); ?>'">
	<div class="control-search-input">
		<input type="text" class="search-input custom-search-input" placeholder="<?php echo lang('search_goods'); ?>">
		<button type="button" class="search-button custom-search-button"><?php echo lang('search'); ?></button>
		<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
	</div>
</div>
</span></div>
</section>

	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<div class="custom-tag-list">
	<div class="custom-menu-block">
		<ul>
			<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): if( count($goods_category_list)==0 ) : echo "" ;else: foreach($goods_category_list as $k=>$vo): ?>
			<li <?php if($k == 0): ?>class="current"<?php endif; ?>><a href="javascript:;" data-id="<?php echo $vo['category_id']; ?>"><?php echo $vo['short_name']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	
	<div class="custom-list-goods">
		<?php if(is_array($goods_category_list) || $goods_category_list instanceof \think\Collection || $goods_category_list instanceof \think\Paginator): if( count($goods_category_list)==0 ) : echo "" ;else: foreach($goods_category_list as $k=>$vo): ?>
		<div class="content" <?php if($k == 0): ?>style="display:block;"<?php endif; ?> data-pid="<?php echo $vo['category_id']; ?>">
			<div class="category">
				<?php if(!(empty($vo['category_pic']) || (($vo['category_pic'] instanceof \think\Collection || $vo['category_pic'] instanceof \think\Paginator ) && $vo['category_pic']->isEmpty()))): ?>
				<div class="one_category_pic">
					<img src="<?php echo __IMG($vo['category_pic']); ?>" alt="">
				</div>
				<?php endif; ?>
				<a href="<?php echo __URL('APP_MAIN/goods/goodslist','category_id='.$vo['category_id']); ?>" class="one_category"><?php echo $vo['category_name']; ?></a>
			</div>
			<?php if(count($vo['child_list']) > 0): if(is_array($vo['child_list']) || $vo['child_list'] instanceof \think\Collection || $vo['child_list'] instanceof \think\Paginator): if( count($vo['child_list'])==0 ) : echo "" ;else: foreach($vo['child_list'] as $key=>$so): ?>
					<a href="<?php echo __URL('APP_MAIN/goods/goodslist','category_id='.$so['category_id']); ?>" ><h4 class="category_title"><?php echo $so['category_name']; ?></h4></a>
					<!-- 三级分类 -->
					<?php if(count($so['child_list']) > 0): ?>
						<div class="three_categorty_box">
							<ul>
								<?php if(is_array($so['child_list']) || $so['child_list'] instanceof \think\Collection || $so['child_list'] instanceof \think\Paginator): if( count($so['child_list'])==0 ) : echo "" ;else: foreach($so['child_list'] as $key=>$to): ?>
								<li>
									<a class="cate_pic" href="<?php echo __URL('APP_MAIN/goods/goodslist','category_id='.$to['category_id']); ?>"><img src="__TEMP__/<?php echo $style; ?>/public/images/category_pic_empty.png" class="lazy_load" data-original="<?php echo __IMG($to['category_pic']); ?>" alt=""></a>
									<p class="cate_name"><?php echo $to['category_name']; ?></p>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					<?php else: ?>
						<div class="three_categorty_box">
							<ul>
								<li>
									<a class="cate_pic" href="<?php echo __URL('APP_MAIN/goods/goodslist','category_id='.$so['category_id']); ?>"><img src="__TEMP__/<?php echo $style; ?>/public/images/category_pic_empty.png" class="lazy_load" data-original="<?php echo __IMG($so['category_pic']); ?>" alt=""></a>
									<p class="cate_name"><?php echo $so['category_name']; ?></p>
								</li>
							</ul>
						</div>
					<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

</div>

<script>
	$(function(){
		bottomActive('#bottom_classify');
		$("img.lazy_load").lazyload({
			threshold : 0,
			effect : "fadeIn", //淡入效果
			skip_invisible : false,
			container: $(".custom-list-goods")
		})
	});
	// 点击显示分类
	$(".custom-menu-block ul li").click(function(){
		$(".custom-menu-block ul li").removeClass("current");
		$(this).addClass("current");
		var ca_id = $(this).children("a").data("id");
		$(".custom-list-goods .content").hide();
		$("[data-pid='"+ca_id+"']").show();

		$("img.lazy_load").lazyload({
			threshold : 0,
			effect : "fadeIn", //淡入效果
			skip_invisible : false,
			container: $(".custom-list-goods")
		})
		
	})


</script>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
		<?php if($custom_template_is_enable == 1): ?>
		
			<div class="js-bottom-blank" style="height:56px;"></div>
			<!-- 底部菜单 -->
<style>
.control-footer{border-top:1px solid #e5e5e5;}
.control-footer ul li{float: left;text-align: center;cursor: pointer;padding:5px 0;background: #ffffff;font-family: "微软雅黑", "Helvetica Neue", "Helvetica", Helvetica, Arial,sans-serif;}
.control-footer ul li img {width: 25px;}
.control-footer ul li label {overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin: 2px 0 0;display: block;font-size:12px;}
</style>
<div class="fixed bottom control-footer js-base-footer">
	<ul>
		<?php foreach($custom_footer as $k=>$footer_val): ?>
		<li style="width: <?php echo 1/count($custom_footer)*100; ?>%" onclick="location.href='<?php echo $footer_val['href']; ?>'">
			<?php if($footer_val['img_src'] !=''): if($k==$select_footer_index): ?>
			<img src="<?php echo __IMG($footer_val['img_src_hover']); ?>"/>
			<?php else: ?>
			<img src="<?php echo __IMG($footer_val['img_src']); ?>"/>
			<?php endif; endif; if($footer_val['menu_name'] !=''): ?>
			<label style="color:<?php echo $footer_val['color']; ?>;"><?php echo $footer_val['menu_name']; ?></label>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
			
		<?php else: ?>
		
			<div style="height:58px;"></div>
			<!-- 底部菜单 -->
<div class="fixed bottom">
	<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
	<dl class="sub-nav nav-b5">
		<dd id="bottom_home">
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_check.png"/>
					<span><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_classify">
			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
					<span><?php echo lang('category'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_cart">
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_member">
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</dd>
	</dl>
</div>
			
		<?php endif; ?>

	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>