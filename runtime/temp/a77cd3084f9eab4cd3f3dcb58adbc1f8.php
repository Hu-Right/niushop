<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:42:"template/adminblue\Goods\goodsComment.html";i:1555393967;s:28:"template/adminblue\base.html";i:1555393968;s:45:"template/adminblue\controlCommonVariable.html";i:1555393965;s:32:"template/adminblue\urlModel.html";i:1555393969;s:34:"template/adminblue\pageCommon.html";i:1555393965;s:34:"template/adminblue\openDialog.html";i:1555393971;}*/ ?>
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
	
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<style type="text/css">
.tr-title { height: 30px; border: 1px solid rgba(234, 233, 233, 0.51);}
.td14{padding-left: 20px !important;}
/*input[type="radio"], input[type="checkbox"] {margin: -1px 5px 0;margin-left: 0px;}*/
#myModaltype,#reply{width: 75px;}
#evaluate_reply{min-height: 75px;}
.content{display: block;margin-left: 65px;}
.content-left{float: left;}
.more-search{line-height: 20px;outline: none;}
#evaluate dt{width:80px !important;}
</style>
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>

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
			
<table class="mytable">
	<tr>
		<th width="9%" style="text-align:left;">
			<button class="btn-common-delete btn-small" onclick="batchDelete()">批量删除</button>
		</th>
		<th style="line-height:33px;">
			评价时间：
			<input type="text" id="startDate" class="middle input-common" placeholder="请选择开始日期" onclick="WdatePicker()" />
			&nbsp;-&nbsp;
			<input type="text" id="endDate" placeholder="请选择结束日期" class="middle input-common" onclick="WdatePicker()" />
			
			<button class="btn-common-white more-search"><i class="fa fa-chevron-down"></i></button>
			<button class="btn-common" onclick="LoadingInfo(1)">搜索</button>
			
			<!-- 更多搜索 -->
			<div class="more-search-container">
				<dl>
					<dt>评价用户：</dt>
					<dd><input id="member_name" class="middle input-common" type="text" placeholder="请输入用户名称" ></dd>
				</dl>
				<dl>
					<dt>评价类型：</dt>
					<dd>
						<select id="explain_type" class="select-common middle">
							<option value="">全部</option>
							<option value="1">好评</option>
							<option value="2">中评</option>
							<option value="3">差评</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt></dt>
					<dd><button class="btn-common" onclick="LoadingInfo(1)">完成</button></dd>
				</dl>
			</div>
		</th>
	</tr>
</table>
<table class="table-class">
	<colgroup>
		<col style="width: 2%;">
		<col style="width: 14%;">
		<col style="width: 30%;">
		<col style="width: 19%;">
		<col style="width: 25%;">
		<col style="width: 10%;">
	</colgroup>
	<tbody>
		<tr class="table-title" style="background: white; z-index: 10; border: 1px solid #E3E3E3;">
			<th style="text-align: center;">
				<i class="checkbox-common"><input onclick="CheckAll(this)" type="checkbox"></i>
				<!-- <span style="display: inline-block; margin-left: 0px; margin-right: 10px; font-weight: 400;">全选</span> -->
			</th>
			<th colspan="2" style="text-align: left;padding-left: 35px;">商品</th>
			<th  style="text-align: left;">评价信息</th>
			<th colspan="1" style="text-align: center;">评价时间</th>
			<th style=" text-align: center;">操作</th>
		</tr>
	</tbody>
	<tbody id="productTbody" style="border: 0;"></tbody>
</table>
<input type="hidden" id="type">
<input type="hidden" id="replyType">
<div class="modal fade hide" id="evaluate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>评价回复</h3>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<!-- <table>
						<tr>
							<td id="myModaltype"><b>评价内容：</b></td>
							<td id="evaluate_content"></td>
						</tr>
						<tr>
							<td id="reply">回复内容：</td>
							<td><textarea id="evaluate_reply" style="margin-top: 5px;" class="input-common"></textarea></td>
						</tr>
					</table> -->
					
					<div class="set-style">
						<dl>
							<dt id="myModaltype">评价内容：</dt>
							<dd id="evaluate_content">
							</dd>
						</dl>
						<dl>
							<dt id="reply">回复内容：</dt>
							<dd>
								<textarea id="evaluate_reply"  class="textarea-common"></textarea>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="evaluate_id">
				<button type="button" class="btn-common btn-big" onclick="replyevaluateAjax()">保存</button>
				<button type="button" class="btn btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

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

<script type="text/javascript">
//隐藏商品分组
function hideEditGroup(){
	$("#editGroup").popover("hide");
}

function hideSetRecommend(){
	$("#setRecommend").popover("hide");
}

function LoadingInfo(page_index) {
	var member_name = $("#member_name").val();
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	var explain_type = $("#explain_type").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/goodscomment'); ?>",
		data : {
			"page_index" : page_index,
			'page_size' : $("#showNumber").val(),
			"start_date":start_date,
			"end_date":end_date,
			"member_name" : member_name,
			"explain_type" : explain_type
		},
		success : function(data) {
			if (data["data"].length > 0) {
				$("#productTbody").empty();
				for (var i = 0; i < data["data"].length; i++) {
					var html = '';
					html += '<tr class="tr-title">';
					if(data['data'][i]['again_content'].length > 0){
						html += '<td style="text-align:center;" rowspan="3">';
					}else{
						html += '<td style="text-align:center;" rowspan="2">';
					}
					
					html += '<i class="checkbox-common"><input value="'+data['data'][i]['id']+'" name="sub" type="checkbox"></i></td>';
					html += '<td colspan="2" style="padding-left:35px;border-left:1px solid #e5e5e5;"><div class="pro-code"><a href="'+__URL('SHOP_MAIN/goods/goodsinfo?goodsid='+data["data"][i]["goods_id"])+'" target="_blank">';
					html += '<span style="margin-right:5px;width:60px;float:left;"><img src="'+ __IMG(data["data"][i]["goods_image"])+'" style="width:60px;height:60px;"></span>';
					html += '<span>'+ data["data"][i]["goods_name"]+'</span></a></div></td>';
					html += '<td><span class="pro-code">评价用户： '+ data["data"][i]["member_name"]+'</span><br><span class="pro-code" >';
					switch(data["data"][i]["explain_type"]){
						case 1:
							html += '用户评价： 好评</span><br>';
							break;
							case 2:
							html += '用户评价： 中评</span><br>';
							break;
							case 3:
							html += '用户评价： 差评</span><br>';
						break;
					}
					html += '<span class="pro-code">用户评分： '+ data["data"][i]["scores"]+'分</span></td>';
					html += '<td align="center"><span class="pro-code">评价时间：'+ timeStampTurnTime(data["data"][i]["addtime"])+'</span></td>';
					if(data['data'][i]['is_show'] == 1){
						html += '<td style="text-align:center;"><a href="javascript:;" title="点击隐藏" onclick="setEvaluteShowStatuAjax('+data['data'][i]['id']+');">隐藏</a>';
						html += '<a href="javascript:void(0)" data-placement="bottom" onclick="deleteEvaluate('+data['data'][i]['id']+')" data-original-title="删除"><span class="del" style="display: inline-block;"><i class="icon-trash" style="width: initial;"></i>删除</span></a></td></tr>';
					}else{
						html += '<td style="text-align:center;"><a href="javascript:;" title="点击显示" onclick="setEvaluteShowStatuAjax('+data['data'][i]['id']+');">显示</a>';
						html += '<a href="javascript:void(0)" data-placement="bottom" onclick="deleteEvaluate('+data['data'][i]['id'] +')" data-original-title="删除"><span class="del" style="display: inline-block;"><i class="icon-trash" style="width: initial;"></i>删除</span></a></td></tr>';
					}
					html += '<tr><td colspan="4" style="background: white;"><p><span class="content-left">评价内容:</span>';
					if(data['data'][i]['content'].length > 0){
						html +='<span class="evaluate_content content">'+data['data'][i]['content']+'</span>';
						if(data['data'][i]['image']!= ''){
							var imgs_arr=data['data'][i]['image'].split(',');
							html += '<span class="evaluate_content content" style="margin-left: 65px;margin-top: 5px;">';
							for(var key in imgs_arr){
								html += '<img src="'+__IMG(imgs_arr[key])+'" alt="" style="max-height:60px;margin-right:10px;">';
							}
							html += '</span></p>';
						}
					}else{
						html += '<span class="evaluate_content"></span><br></p>';
					}	
					if(data['data'][i]['explain_first'].length > 0){
						html += '<p><span class="content-left">回复内容:</span> <span class="evaluate_reply content">'+data['data'][i]['explain_first']+'</span></p></td>';
						html += '<td style="background: white;"><div class="bs-docs-example tooltip-demo" style="text-align: center;"><a href="javascript:;" data-placement="bottom" data-original-title="回复"><span class="edit" onclick="replyevaluate('+data['data'][i]['id'] +',this)"><i class="icon-edit" style="width: initial;"></i>回复</span></a></div></td></tr>';
					}else{
						html += '<td style="background: white;"><div class="bs-docs-example tooltip-demo" style="text-align: center;"><a href="javascript:;" data-placement="bottom" data-original-title="回复"><span class="edit" onclick="replyevaluate('+data['data'][i]['id'] +',this)"><i class="icon-edit" style="width: initial;"></i>回复</span></a></div></td></tr>';
					}
					if(data['data'][i]['again_content'].length > 0){
						html += '<tr><td colspan="4" style="background: white;"><p><span  class="content-left">追评内容:</span>';
						html +='<span class="evaluate_content content">'+data['data'][i]['again_content']+'</span>';
						if(data['data'][i]['again_image'].length > 0){
							var imgs_arr=data['data'][i]['again_image'].split(',');
							html += '<span class="evaluate_content" style="margin-left: 65px; margin-top: 5px;display:block;">';
							for(var key in imgs_arr){
								html += '<img src="'+__IMG(imgs_arr[key])+'" alt="" style="max-height:60px;margin-right:10px;">';
							}
							html += '</span></p>';
						}
						if (data['data'][i]['again_explain'].length > 0) {
							html += '<p><span class="content-left">追评回复:</span> <span class="evaluate_reply content">'+data['data'][i]['again_explain']+'</span></p></td>';
							html += '<td style="background: white;"><div style="text-align: center;"><a href="javascript:;" data-placement="bottom" data-original-title="回复"><span class="edit" onclick="replyevaluateAgain('+data['data'][i]['id'] +',this)"><i class="icon-edit" style="width: initial;"></i>回复</span></a>';
						}else{
							html += '<td style="background: white;"><div style="text-align: center;"><a href="javascript:;" data-placement="bottom" data-original-title="回复"><span class="edit" onclick="replyevaluateAgain('+data['data'][i]['id'] +',this)"><i class="icon-edit" style="width: initial;"></i>回复</span></a>';
						}
					}
					$("#productTbody").append(html);
				}
			}else {
				var html = '<tr align="center"><td colspan="6" style="text-align: center;">暂无符合条件的数据记录</td></tr>';
				$("#productTbody").html(html);
			}
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}

function batchDelete() {
	var evaluate_id= new Array();
	$("#productTbody input[type='checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			evaluate_id.push($(this).val());
		}
	});
	if(evaluate_id.length ==0){
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			contentText:"请选择需要操作的记录",
			title:"消息提醒",
		});
		return false;
	}
	deleteEvaluate(evaluate_id);
}

// 删除
function deleteEvaluate(evaluate_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$.ajax({
					type : "post",
					url : "<?php echo __URL('ADMIN_MAIN/goods/deleteevaluateajax'); ?>",
					data : { "evaluate_id" : evaluate_id.toString() },
					dataType : "json",
					success : function(data) {
						if(data['code'] > 0){
							LoadingInfo(getCurrentIndex(evaluate_id,'#productTbody','tr[class="tr-title"]'));
							showMessage('success', data['message']);
						}else{
							showMessage('error', data['message']);
						}
					}
				});
			},
			"取消,#f5f5f5,#666" : function(){
				$(this).dialog('close');
			}
		},
		contentText:"你确定删除吗？",
		title:"消息提醒"
	});
}

//全选
function CheckAll(event){
	var checked = event.checked;
	if(checked) $("#productTbody input[type = 'checkbox']").prop("checked",checked).parent().addClass("selected");
	else $("#productTbody input[type = 'checkbox']").prop("checked",checked).parent().removeClass("selected");
}

//回复 弹出框
function replyevaluate(evaluate_id, event){
	var evaluate_content = $(event).parents('tr').find('.evaluate_content').html();
	var evaluate_reply = $(event).parents('tr').find('.evaluate_reply').html();
	if(evaluate_reply == undefined){
		evaluate_reply = '';
	}
	$("#replyType").val(1);
	$("#myModalLabel").text("评价回复");
	$("#myModaltype").text("评价内容：");
	$("#evaluate").modal('show');
	$("#evaluate_id").val(evaluate_id);
	$("#evaluate_content").html(evaluate_content);
	$("#evaluate_reply").text(evaluate_reply);
}

function replyevaluateAgain(evaluate_id, event){
	var evaluate_content = $(event).parents('tr').find('.evaluate_content').html();
	var evaluate_reply = $(event).parents('tr').find('.evaluate_reply').html();
	if(evaluate_reply == undefined){
		evaluate_reply = '';
	}
	$("#replyType").val(2);
	$("#myModalLabel").text("追评回复");
	$("#myModaltype").text("追评内容：");
	$("#evaluate").modal('show');
	$("#evaluate_id").val(evaluate_id);
	$("#evaluate_content").html(evaluate_content);
	$("#evaluate_reply").text(evaluate_reply);
}

// 回复提交
function replyevaluateAjax(){
	var evaluate_id = $("#evaluate_id").val();
	var evaluate_reply = $("#evaluate_reply").val();
	var replyType = $("#replyType").val(); //1为评价回复 2为追评回复
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/replyevaluateajax'); ?>",
		data : {
			"evaluate_id" : evaluate_id, 
			"evaluate_reply" : evaluate_reply,
			"replyType" : replyType
		},
		success : function(data) {
			if(data['code'] > 0){
				showMessage('success', data['message'], "<?php echo __URL('ADMIN_MAIN/goods/goodscomment'); ?>");
			}else{
				showMessage('error', data['message']);
			}
		}
	});
}

//设置显示状态
function setEvaluteShowStatuAjax(evaluate_id){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/setevaluteshowstatuajax'); ?>",
		data : {"evaluate_id" : evaluate_id},
		success : function(data) {
			if(data['code'] > 0){
				location.reload();
			}else{
				showMessage('error', data['message']);
			}
		}
	});
}

document.onkeydown = function(e){ 
	var ev = document.all ? window.event : e;
	if(ev.keyCode==13) {
		LoadingInfo(1);
	}
}

// 点击显示更多搜索
$(".more-search").click(function(){
	$(".more-search-container").slideToggle();
})
</script>

</body>
</html>