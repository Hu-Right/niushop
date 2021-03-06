<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:45:"template/adminblue\Promotion\addGroupBuy.html";i:1555393971;s:28:"template/adminblue\base.html";i:1555393968;s:45:"template/adminblue\controlCommonVariable.html";i:1555393965;s:32:"template/adminblue\urlModel.html";i:1555393969;s:51:"template/adminblue\Promotion\goodsSelectDialog.html";i:1555393971;s:34:"template/adminblue\pageCommon.html";i:1555393965;s:34:"template/adminblue\openDialog.html";i:1555393971;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
	<link rel="stylesheet" type="text/css" href="ADMIN_CSS/selectric.css" />
	<style>
	.Switch_FlatRadius.On span.switch-open{background-color: #126AE4;border-color: #126AE4;}
	#copyright_meta a{color:#333;}
	.fa-wechat-applet:before{content:'';display:inline-block;width:20px;height:20px;background:#FFF url(__STATIC__/images/wechat_applet.png) no-repeat;background-size: 100%;}
	</style>
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
	<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
	<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
	<script src="__STATIC__/js/common.js"></script>
	<script src="__STATIC__/js/seller.js"></script>
	<script src="__STATIC__/js/load_task.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<script src="ADMIN_JS/layer/layer.js"></script>
	<script src="ADMIN_JS/jquery-ui.min.js"></script>
	<script src="ADMIN_JS/ns_tool.js"></script>
	<script src="ADMIN_JS/jquery.selectric.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
	
	<script>

	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var ADDONS = "__ADDONS__";
	var STATIC = "__STATIC__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
	var UPLOADGOODSVIDEO = "<?php echo constant('GOODS_VIDEO_PATH'); ?>";//存放商品视频
	var UPLOADFILE = "<?php echo constant('UPLOAD_FILE'); ?>";//存放文件
	var UPLOADWATERMARK = "<?php echo constant('UPLOAD_WATERMARK'); ?>";//存放水印图片
</script>
	
<script src="ADMIN_JS/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<style  type="text/css">
input[type="radio"]{margin-top:6px;}
.total{width: 100%;overflow: hidden;}
.total label {float:left;text-align: left;font-size: 15px; width:10%;overflow:hidden;color:#666;font-weight: normal;line-height: 32px;margin-bottom:0px}
.total label input {margin: 0 5px 0 0;}
.w250{width:250px!important;}
</style>

	</head>
<body>
<input type="hidden" id="system_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="system_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="system_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#system_admin_model"));
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
		if(url_model==1 || url_model==true){
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

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<article class="ns-base-article">

	<header class="ns-base-header">
		<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';"></div>
		<div class="ns-search">
			<div class="nav-menu js-nav">
				<img src="__STATIC__/blue/img/nav_menu.png" title="导航管理" />
			</div>
			<div class="ns-navigation-management">
				<div class="ns-navigation-title">
					<h4>导航管理</h4>
					<span>x</span>
				</div>
				<div style="height:40px;"></div>
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
				<dl>
					<dt><?php echo $nav['data']['module_name']; ?></dt>
					<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
					<dd>
						<a href="<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>"><?php echo $nav_sub['module_name']; ?></a>
					</dd>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="ns-search-block">
				<i class="fa fa-search" title="搜索"></i>
				<span>搜索</span>
				<div class="mask-layer-search">
					<input type="text" id="search_goods" placeholder="搜索" />
					<a href="javascript:search();"><img src="__STATIC__/blue/img/enter.png"/></a>
				</div>
			</div>
		</div>
		<nav>
			<ul>
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
				<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				
				<?php else: ?>
				<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div class="ns-base-tool">
			<i class="i-home"  title="前台首页"><a href="<?php echo __URL('SHOP_MAIN'); ?>" target="_blank"></a></i>
			<i class="i-close" title="退出登录"><a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>"></a></i>
			<i class="ns-vertical-bar"></i>
			<div class="ns-help">
				<div class="logo">
				<?php if($user_headimg != ''): ?>
				<img src="<?php echo __IMG($user_headimg); ?>"/>
				<?php else: ?>
				<img src="__STATIC__/blue/img/user_admin_blue.png" width="30" >
				<?php endif; ?>
				</div>
				<span><?php echo $user_name; ?></span>
				<i class="fa fa-angle-down"></i>
				<ul>
					<li>
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
					</li>
					<li title="清理缓存" onclick="delcache()">
						<img src="__STATIC__/blue/img/clear_the_cache.png"/>
						<a href="javascript:;">清理缓存</a>
					</li>
					<li title="加入收藏" onclick="addFavorite()">
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="javascript:;">加入收藏</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<aside class="ns-base-aside">
		<div class="ns-main-block">
			
			<h3 style="margin-top:50px;">
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
					<span class="<?php echo $per['module_name']; ?>"><?php echo $per['module_name']; ?></span>
					<i class="fa fa-caret-down"></i>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</h3>
			
			<nav>
				<ul>
					<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!-- 快捷菜单列表 -->
					<?php if($is_show_shortcut_menu == 1): if(is_array($shortcut_menu_list) || $shortcut_menu_list instanceof \think\Collection || $shortcut_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shortcut_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$menu['url']); ?>';" title="<?php echo $menu['module_name']; ?>"><?php echo $menu['module_name']; ?></li>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
				<!-- 快捷菜单设置按钮 -->
				<?php if($is_show_shortcut_menu == 1): ?>
				<div class="shortcut-menu" onclick="show_shortcut_menu()">
					<span></span>
					常用功能
				</div>
				<?php endif; ?>
			</nav>
			
			<div style="height:50px;"></div>
			
			<div id="bottom_copyright">
				<footer>
					<img id="copyright_logo"/>
<!-- 					<p> -->
<!-- 						<span id="copyright_desc"></span> -->
<!-- 						<br/> -->
<!-- 						<a id="copyright_companyname" style="color: #333" target="_blank"></a> -->
<!-- 						<br/> -->
<!-- 						<span id="copyright_meta"></span> -->
<!-- 					</p> -->
				</footer>
			</div>
		</div>
	</aside>
	
	<section class="ns-base-section">
		
		
		
		<div style="position:relative;margin:0;">
			<!-- 面包屑导航 -->
			<?php if(!isset($is_index)): ?>
			<div class="breadcrumb-nav">
				<a href="<?php echo __URL('ADMIN_MAIN'); ?>"><?php echo $title_name; ?></a>
				<?php if($frist_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<a href="<?php echo __URL('ADMIN_MAIN/'.$frist_menu['url']); ?>"><?php echo $frist_menu['module_name']; ?></a>
				<?php endif; if($secend_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<!-- 需要加跳转链接用这个：ADMIN_MAIN/<?php echo $secend_menu['url']; ?> -->
					<a href="javascript:;" style="color:#999;"><?php echo $secend_menu['module_name']; ?></a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!-- 三级导航菜单 -->
			
				<?php if(count($child_menu_list) > 1): ?>
				<nav class="ns-third-menu">
					<ul>
					<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
							<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php else: ?>
							<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</nav>
				<?php endif; ?>
			
			<div class="right-side-operation">
				<ul>
					
					
<!-- 					<?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?> style="display:block;" -->
					
				</ul>
			</div>
		</div>
		
		<!-- 操作提示 -->
		
<!-- 		<?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?> -->
		<div class="ns-warm-prompt" style="display:none;">
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
<!-- 					{1block name="alert_info"} -->
<!-- 					<i class="fa fa-info-circle"></i> -->
<!-- 					<span class="operating-hints">操作提示</span> -->
<!-- 						<?php if($secend_menu['desc']): ?> -->
<!-- 						<span><?php echo $secend_menu['desc']; ?></span> -->
<!-- 						<?php endif; ?> -->
<!-- 					{1/block} -->
				</h4>
			</div>
		</div>
		
		
		<div class="ns-main">
			
<div class="space-10"></div>
<div class="set-style">
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;活动名称：</dt>
		<dd>
			<input type="text" id="group_name" class="input-common">
			<p class="error">请输入活动名称</p>
		</dd>
	</dl>
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;活动时间：</dt>
		<dd>
			<input class="input-medium input-common harf" type="text" id="start_time" style="width:250px;"onclick="WdatePicker({skin:'twoer',dateFmt:'yyyy-MM-dd HH:mm:ss'})" placeholder="请选择开始时间">
			<span class="mlr5">-</span> 
			<input class="input-medium input-common harf" size="15" type="text" id="end_time" style="width:250px;"onclick="WdatePicker({skin:'twoer',dateFmt:'yyyy-MM-dd HH:mm:ss'})" placeholder="请选择结束时间">
			<p class="error">请输入有效时间</p>
			<p class="error">活动结束时间不能小于当前时间</p>
			<p class="error">活动结束时间不能小于开始时间</p>
		</dd>
	</dl>
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;最大购买量：</dt>
		<dd><input class="input-mini w70 input-common harf" onkeyup="value=value.replace(/\D/g,'')" type="number" id="max_num"><em class="unit">件</em>
			<p class="error">请输入最大购买量</p>
		</dd>
	</dl>
<!-- 	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;最小购买量：</dt>
		<dd><input class="input-mini w70 input-common" onkeyup="value=value.replace(/\D/g,'')" type="text" id="min_num"><span class="help-inline">个</span>
			<p class="error">请输入最小购买量</p>
		</dd>
	</dl> -->
	<dl>
		<dt><span style="color:red;">*</span>&nbsp;&nbsp;价格阶梯：</dt>
		<dd>
			<span class="help-inline">最小购买</span> <input class="input-mini w70 input-common harf" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')" type="number" data="num" value=""><em class="unit">件</em><br/>
			<span class="help-inline">购买价格</span> <input class="input-mini w70 input-common harf" onkeyup='this.value=this.value.replace(/\D/gi,"")' type="number" data="price" value=""><em class="unit">元</em>
		</dd>
	</dl>
	<dl>
		<dt>活动说明：</dt>
		<dd>
			<textarea name="store_zy" rows="2" id="remark" class="textarea-common" ></textarea>
			<p class="error">请输入活动说明</p>
		</dd>
	</dl>
	<!-- 所有决定商品弹框内容的条件和存放商品id的隐藏域 -->
	<span id="goods-condition">
		<input type="hidden" name="type" value="1"/>
		<input type="hidden" name="stock" value="1"/>
		<input type="hidden" name="goods_type" value="1,2"/>
		<input type="hidden" name="is_have_sku" value="1"/>
		<input type="hidden" name="state" value="1"/>
		<input type="hidden" id="goods_id_array" value="">
		<input type="hidden" id="range_type" value="0">
		<input type="hidden" id="is_show_select" value="0">
		<input type="hidden" id="action" value="">
	</span>
	<style>
.table-class tr th{padding:5px;}
.table-class tr td{text-align: center;}
input[type="radio"]{margin-top:6px;}
.total{width: 100%;overflow: hidden;}
.total label {float:left;text-align: left;font-size: 15px; width:10%;overflow:hidden;color:#666;font-weight: normal;line-height: 32px;margin-bottom:0}
.total label input {margin: 0 5px 0 0;}
input[name='discount']{vertical-align:-1px;width:60px;}
.select-tip{margin-left:10px;}
.layui-layer-iframe{border:4px solid #f8f8f8;border-top:0;}
</style>
<!-- 弹出框的样式 -->
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<!-- 插件js -->
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<!-- 调用插件的js -->
<script src="ADMIN_JS/material_managedialog.js"></script>

<!-- 切换全部与部分 -->
<dl style="display:none;" id="select-box">
	<dt>参与商品：</dt>
	<dd>
		<div class="total" id="is_all">
			<label for="navigationtype1" class="in">
				<i class="radio-common selected">
					<input type="radio" value="1" name="range_type"  checked="checked" id="navigationtype1" />
				</i>
				<span>全部</span>
			</label>
			<label for="navigationtype2" class="out">
				<i class="radio-common">
					<input type="radio" value="0" name="range_type"  id="navigationtype2"/>
				</i>
				<span>部分</span>
			</label>
		</div>
	</dd>
</dl>
<!-- 弹框按钮 -->
<dl class="js-select-goods" style="display:none;">
	<dt>选择商品：</dt>
	<dd>
		<button class="btn-common" onclick="open_Goods_Select_List()">选择商品</button><span class="select-tip"></span>
		<p class="error"></p>
	</dd>
</dl>
<!-- 已选择商品的列表 -->
<dl>
	<dd class="goods-list" style="width:100%;display:none;margin-left: 0;">
		<table class="table-class">
			<colgroup>
				<col width="40%">
				<col width="20%">
				<col width="10%">
				<col width="15%">
				<col width="10%">
			</colgroup>
			<thead>
				<tr>
					<th>商品名称</th>
					<th>价格</th>
					<th>库存</th>
					<th id="action-th"></th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</dd>
</dl>

<script>
//商品id数组
var BatchSend = new Array();
//加载次数
var load_num = 1;
//layer索引
var layer_index = 1;

$(function(){
	//对某些特殊页面进行特殊操作
	var action = $("#action").val();
	if(action == 'discount'){
		$("#action-th").html('折扣')
	}else if(action == 'package'){
		$(".select-tip").html('组合套餐商品不能少于两种不能多于六种');
	}
	//是否显示全部与部分
	var is_show_select = $("#is_show_select").val();
	if(is_show_select === '1'){
		$("#select-box").show();
	}
	//如果是修改 初始化选中状态
	var range_type = $("#range_type").val();
	if(range_type === '0'){
		$("input[name='range_type']").eq(0).parent("i").removeClass('selected');
		$("input[name='range_type']").eq(1).click().parent("i").addClass('selected');
		$(".goods-list").show();
		refreshSelectGoods();
	}
	//如果是修改 初始化商品id数组
	var goods_id_array = $("#goods_id_array").val();
	if(goods_id_array != ''){
		BatchSend = goods_id_array.split(",");
	}
})

//刷新选择的商品
function refreshSelectGoods(){
	
	var goods_id_array = $("#goods_id_array").val();
	if(goods_id_array.length > 0){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/goods/getSelectGoodslist'); ?>",
			data : {
				"goods_id_array" : goods_id_array,
				"type" : "selected"
			},
			async : false,
			success : function(data) {
				var html = '';
				var action = $("#action").val();
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						
						html += '<tr>';
							html += '<i class="checkbox-common"><input value="' + data["data"][i]["goods_id"] + '"  type="hidden"></i>';

							html += '<td style="text-align:left;">' + data["data"][i]["goods_name"] + '</td>';

							html += '<td class="goods_price">' + data["data"][i]["price"] + '</td>';
							
							html += '<td>' + data["data"][i]["stock"]  + '</td>';
							
							if(action == "discount"){
								var selected_data = $("#selected_data").val();
								if(selected_data != undefined){
									selected_data = JSON.parse(selected_data);
									if(data["data"][i]["goods_id"] in selected_data){
										var discount = selected_data[data["data"][i]["goods_id"]];
									}else{
										var discount = 9.99;
									}
									html += '<td><input type="number" name="discount" class="input-common short" onchange="discount(this);" goodsid="'+ data["data"][i]["goods_id"] +'" value="'+ discount +'"><em class="unit">折</em></td>';
								}else{
									html += '<td><input type="number" name="discount" class="input-common short" onchange="discount(this);" goodsid="'+ data["data"][i]["goods_id"] +'" value="9.99"><em class="unit">折</em></td>';
								}
							}else{
								html += '<td></td>';
							}
							
							html += '<td><label for=""><i class="fa fa-times" aria-hidden="true fa-2x" onclick="cancelSelect(' + data["data"][i]["goods_id"] + ',this)"></i></label></td>';

						html += '</tr>';
					}
				} 
				$(".goods-list .table-class tbody").html(html);
				load_num ++;
				$(".error").hide();
				if(action == 'package'){
					calculate_original_price();
				}
			}
		})
	}else{
		$(".goods-list .table-class tbody").html("");
	}
}

/*
 * 打开选择商品列表弹窗
 */
function open_Goods_Select_List(){
	//决定商品是单选还是多选
	var type = $("#goods-condition input[name='type']").val();
	
	var obj = new Object();
	//库存  1:库存大于零   不传则无限制
	obj.stock = $("#goods-condition input[name='stock']").val();
	//商品类型 in查询
	obj.goods_type = $("#goods-condition input[name='goods_type']").val();
	// 是否拥有sku 1：正常  0：没有sku
	obj.is_have_sku = $("#goods-condition input[name='is_have_sku']").val();
	// 商品状态 in查询
	obj.state = $("#goods-condition input[name='state']").val();
	
	var data = '';
	for(var prop in obj){
		data += prop + ':' + obj[prop] + ',';
	}

	var goods_id_array = $("#goods_id_array").val();

	layer_index = layer.open({
		  type: 2,
		  title: '商品列表',
		  shadeClose: true,
		  shade: 0.8,
		  area: ['960px', '570px'],
		  content: __URL('ADMIN_MAIN/promotion/goodsSelectList?type=' + type + '&data=' + data + '&goods_id_array=' + goods_id_array),
		});
	
}

/*
 * 获取选择数据的回调
 */
function GoodsCallBack(goods_id_array){
	$("#goods_id_array").val(goods_id_array);
	BatchSend = goods_id_array.split(",");
	refreshSelectGoods();
	layer.close(layer_index);
}

//商品取消选择
function cancelSelect(goods_id,event){
	for(var i = 0; i < BatchSend.length; i++){
		if(BatchSend[i] == goods_id){
			BatchSend.splice(i,1);
		}
	}
  	$("#goods_id_array").val(BatchSend.toString());
  	$(event).parents('tr').remove();
  	$(".error").hide();
  	
  	var action = $("#action").val();
  	if(action == 'package'){
		calculate_original_price();
	}
}

/*
 * 全部与部分商品切换
 */
$("input[name='range_type']").bind('click',function(){
	var value = $(this).val();	
	if(value == 1){
		$(".js-select-goods,.goods-list").hide();
	}else{
		$(".js-select-goods,.goods-list").show();
	}
})
</script>
	<dl>
		<dt></dt>
		<dd>
			<button class="btn-common btn-big" onclick="addGroupBuy();">保存</button>
			<button class="btn-common-cancle btn-big" onclick="javascript:history.back(-1);">返回</button>
		</dd>
	</dl>
</div>

<script>

var flag = false;//防止重复提交
function addGroupBuy(){
	
	var group_name = $("#group_name").val();
	
	var start_time = $("#start_time").val();
	var end_time = $("#end_time").val();
	var max_num = $("#max_num").val();
//	var min_num = $("#min_num").val();
	var remark = $("#remark").val();
	var num_arr = $("input[data='num']");
	var price_arr = $("input[data='price']");
	
	var dataTime = nowDate();
	var now = new Date(dataTime.replace("-", "/").replace("-", "/"));
	var end = new Date(end_time.replace("-", "/").replace("-", "/"));
	var start = new Date(start_time.replace("-", "/").replace("-", "/"));
	if(end < now){
		$("#end_time").next().next('.error').show();
		return false;
	}else{
		$(".error").hide();
	}
	if(end < start){
		$("#end_time").next().next().next('.error').show();
		return false;
	}else{
		$(".error").hide();
	}
	
	var ladder_arr = new Array();
	for(var i=0;i < num_arr.length;i ++){
		var num = num_arr.eq(i).val();
		var price = price_arr.eq(i).val();
		ladder_arr[i] = [num,price];
	}
	var ladder_json = JSON.stringify(ladder_arr);
	
	var goods_id = $("#goods_id_array").val();
	if(verify()){
		if(flag){
			return;
		}
		flag = true;
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/promotion/ajaxAddUpdateGroupBuy'); ?>",
			data : {
				'group_name': group_name,
				'goods_id': goods_id,
				'start_time': start_time,
				'end_time': end_time,
				'max_num' : max_num,
				'price_json' : ladder_json,
				'remark' : remark,
			},
			success : function(data) {
				
				if (data["code"] > 0) {
					showMessage('success', data["message"]);
					location.href=__URL("ADMIN_MAIN/promotion/groupBuyList");
				}else{
					showMessage('error', data["message"]);
					flag = false;
				}
			}
		});
	}
}

function verify(){
	var group_name = $("#group_name").val();
	var goods_id = $("#goods_id_array").val();
	var start_time = $("#start_time").val();
	var end_time = $("#end_time").val();
	var max_num = $("#max_num").val();
/* 	var min_num = $("#min_num").val(); */
	var remark = $("#remark").val();
	var num_arr = $("input[data='num']");
	var price_arr = $("input[data='price']");
	$(".error").hide();
	
	if(group_name == ''){
		$("#group_name").next().show();
		return false;
	}
	
	if(start_time == ''){
		$("#start_time").focus().parent().find('.error').html('请选择活动开始时间').show();
		return false;
	}
	
	if(end_time == ''){
		$("#end_time").focus().parent().find('.error').html('请选择活动结束时间').show();
		return false;
	}
	
	//最大购买数量
	if(max_num == ''){
		$("#max_num").focus().next().next().html('请输入最大购买数量').show();
		return false;
	}else if(max_num == 0){
		$("#max_num").focus().next().next().html('最大购买数量必须大于零').show();
		return false;
	}
	
	//最小购买数量
/* 	if(min_num == ''){
		$("#min_num").focus().next().next().html('请输入最小购买数量').show();
		return false;
	}else if(Number(min_num) >= Number(max_num)){
		$("#min_num").focus().next().next().html('最小购买数量必须小于最大购买数量').show();
		return false;
	} */
	
/* 	min_num = Number(min_num); */
	max_num = Number(max_num);
	//购买数量
	for(var i=0;i < num_arr.length;i ++){
		var num = Number(num_arr.eq(i).val());
		if(num_arr.eq(i).val() == ''){
			num_arr.eq(i).focus().parent().find('.error').html('请输入购买数量').show();
			return false;
		}else if(num == 0){
			num_arr.eq(i).focus().parent().find('.error').html('购买数量不可为零').show();
			return false;
		}else if( num > max_num){
			num_arr.eq(i).focus().parent().find('.error').html('购买数量不可超过最大购买量').show();
			return false;
		}
		
		if(price_arr.eq(i).val() == ''){
			price_arr.eq(i).focus().parent().find('.error').html('请输入购买价格').show();
			return false;
		}else if(!/^[1-9][0-9]*(\.[0-9]{1,2})?$/.test(price_arr.eq(i).val())){
			price_arr.eq(i).focus().parent().find('.error').html('请输入正确的购买价格，价格最多可保留两位有效位数').show();
			return false;
		}
	}
	
	if(BatchSend.length == 0){
		$(".js-select-goods").find(".error").html('请选择团购商品').show();
		return false;
	}else{
		$(".error").hide();
	}
	
	return true;
}

	$("input,textarea").bind('keyup',function(){
		$(".error").hide();
	})
	
	$("select").bind('change',function(){
		$(".error").hide();
	})
function nowDate(){
	var myDate = new Date();
	//获取当前年
	var year=myDate.getFullYear();
	//获取当前月
	var month=myDate.getMonth()+1;
	//获取当前日
	var date=myDate.getDate(); 
	var h=myDate.getHours();//获取当前小时数(0-23)
	var m=myDate.getMinutes();//获取当前分钟数(0-59)
	var s=myDate.getSeconds();
	var now=year+'-'+month+"-"+date+" "+h+':'+m+":"+s;
	return now;
}
</script>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li id="JslastPage">
				
			</li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="total-data">共0条</li>
			<!-- <li class="page-count">共0页</li> -->
			<li class="according-number">
				跳<input type="text" class="input-medium"  id="skipPage" data-curr-page="1"/>页
			</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
 	//console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
 			//console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

 		//console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
//		console.error(e);
 		//console.log("当前页面没有分页，进行还原操作");
 		//console.log($.cookie('page_cookie'));
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});

	// 跳转到某页
	$("#skipPage").blur(function(){
		if(isNaN($(this).val()) || $(this).val().length == 0){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val()) > $("#page_count").val()){
			jumpNumber = $("#page_count").val();
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$(this).val(jumpNumber);
			return;
		}
		if(parseInt($(this).val()) == parseInt($(this).attr("data-curr-page"))){
			return;
		}
		jumpNumber = $(this).val();
		LoadingInfo(jumpNumber);
		savePage(jumpNumber);		
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			if(parseInt($(this).val())<=0){
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
				return;
			}
			if(parseInt($(this).val()) > $("#page_count").val()){
				jumpNumber = $("#page_count").val();
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
				$(this).val(jumpNumber);
				return;
			}
			if(parseInt($(this).val()) == parseInt($(this).attr("data-curr-page"))){
				return;
			}
			jumpNumber = $(this).val();
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
	
</article>

<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="tip-container">
		<span class="inner"></span>
	</div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;top:50%;margin-top:-180.5px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0" style="width: 160px;"><span class="color-red">*</span>原密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1" style="width: 160px;"><span class="color-red">*</span>新密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2" style="width: 160px;"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn-common btn-big" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $web_popup_title; ?>';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
			msgType : type
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
			msgType : type
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
	window.onload = function(){

	}
$(function(){
	
	$(".ns-third-menu ul .btn-more").toggle(
		function(){
			$(".ns-third-menu ul").animate({height:"84px"},300);
		},
		function(){
			$(".ns-third-menu ul").animate({height:"42px"},300);
		}
	);
	
	//公共下拉框
	$('.select-common').selectric();
	
	//公共复选框点击切换样式
	$(".checkbox-common").live("click",function(){
		var checkbox = $(this).children("input");
		if(checkbox.is(":checked")) $(this).addClass("selected");
		else $(this).removeClass("selected");
	});
	
	//鼠标浮上查看预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseover",function(){
		var curr = $(this);
		var src = curr.attr("data-src");
		if(src){
			//alert(src);
			var contents = '<img src="'+src+'" style="width: 100px;height: auto;display:block;margin:0 auto;">';
			//鼠标每次浮上图片时，要销毁之前的事件绑定
			curr.popover("destroy");
			
			//重新配置弹出框内容
			curr.popover({ content : contents });

			//显示
			curr.popover("show");
		}
	});
	
	//鼠标离开隐藏预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseout",function(){
		var curr = $(this);
		//隐藏
		if($(".popover.top").is(":visible") && curr.attr("data-src")) curr.popover("hide");
	});

	//公共单选框点击切换样式
	$(".radio-common").live("click",function(){
		var radio = $(this).children("input");
		var name = radio.attr("name");
		if(radio.is(":checked")){
			$(".radio-common>input[type='radio'][name='" + name + "']").parent().removeClass("selected");
			$(this).addClass("selected");
		}else{
			$(this).removeClass("selected");
		}
	});

	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	//搜索展开
	$(".ns-search-block").hover(function(){
		if($(this).children(".mask-layer-search").is(":hidden")) $(this).children(".mask-layer-search").fadeIn(300);
	},function(){
		if($(this).children(".mask-layer-search").is(":visible")) $(this).children(".mask-layer-search").fadeOut(300);
	});
	
	$(".ns-base-tool .ns-help").hover(function(){
		if($(this).children("ul").is(":hidden")) $(this).children("ul").fadeIn(250);
	},function(){
		if($(this).children("ul").is(":visible")) $(this).children("ul").fadeOut(250);
	});
	
});

function addFavorite() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
}

</script>

</body>
</html>