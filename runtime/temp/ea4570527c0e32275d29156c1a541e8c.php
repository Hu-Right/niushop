<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"template/adminblue\Order\orderPrintAction.html";i:1555393968;}*/ ?>
<style>
.cell .is_Increment{
	margin-left: 10px;
}	
.is_Increment{
	display: none;
}
.is_Increment + label{
    width: 15px;
    height: 15px;
    display: inline-block;
    margin-left: 5px;
    position: relative;
    top: 8px;
	background: url("__STATIC__/blue/img/un_checked.png") no-repeat;
}
.is_Increment:checked + label{
	background: url("__STATIC__/blue/img/checked.png") no-repeat;
}
.order_goods_name,.popover_order_goods_name{
	display: inline-block;
	width: 280px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.popover_order_goods_name{
	width: 250px;
}
.data_more_goods{
    display: inline-block;
    width: 20px;
    position: relative;
    top: -10px;
    height: 18px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button{
    -webkit-appearance: none !important;
    margin: 0; 
}
.form-horizontal .control-label{
	width: 80px;
}
.form-horizontal .controls{
	margin-left: 10px;
	display: inline-block;
}
.goToConfigure{
	color: red;
	text-decoration: underline;
	margin-left: 10px;
	display: none;
}
.goToConfigure:hover{
	color: red;
}
.modal-footer .tips{
	float: left;
	color: red;
}
.header-table{
    margin-bottom: 0;
    border: 1px solid #ddd;
    border-bottom: 0;
    max-width: calc(100% - 2px);
}
.table-border-row tr td:first-child{
	border-left: 1px solid #e5e5e5;
}
.body-table{
    border: solid #ddd;
    border-width: 0 1px 0 1px;
}
</style>
<!-- 打印发货单 -->
<div id="prite-send" class="modal hide fade" data-backdrop="static" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-536px;border-radius: 0;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>打印发货单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table" style="margin-bottom: 0;">
					<colgroup>
						<col style="width: 25%">
						<col style="width: 37%">
						<col style="width: 18%">
						<col style="width: 20%">
					</colgroup>
					<tr style="background: #F2F6FC;">
						<th>订单编号</th>
						<th>商品名称</th>
						<th>快递公司</th>
						<th>运单号</th>
					</tr>
				</table>
			</div>
			<div class="data-table-body" style="height: 240px;">
				<table class="table table-border-row" style="margin-bottom: 0;">
					<colgroup>
						<col style="width: 25%">
						<col style="width: 37%">
						<col style="width: 18%">
						<col style="width: 20%">
					</colgroup>
					<tbody id="InvoiceList"></tbody>
				</table>
			</div>
		</div>
		<form class="form-horizontal" style="display: none;">
			<div class="control-group">
				<label class="control-label" for="deliveryShopInfo"><span class="color-red">*</span>发件人</label>
				<div class="controls">
					<select id="deliveryShopInfo" class="input-large"></select>
					<span class="help-block" style="display: none;">请输入选择发件人</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<label class="checkbox"></label>
				</div>
			</div>
		</form> 
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<button class="btn-common" id="invoicePrinPreview" aria-hidden="true">打印预览</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- 打印出库单 -->
<div id="print-billOfSales" class="modal hide fade" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-536px;border-radius: 0;" data-backdrop="static">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>打印出库单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table" style="margin-bottom: 0;">
					<colgroup>
						<col style="width: 29%">
						<col style="width: 15%">
						<col style="width: 8%">
						<col style="width: 8%">
						<col style="width: 15%">
						<col style="width: 15%">
					</colgroup>
					<tr style="background: #F2F6FC;border-bottom:1px solid #ddd">
						<th>商品名称</th>
						<th>sku名称</th>
						<th style="text-align: center;">出库量</th>
						<th style="text-align: center;">库存量</th>
						<th>商品编码</th>
						<th style="text-align: center;">订单号</th>
					</tr>
				</table>
			</div>
			<div class="data-table-body" style="height: 240px;">
				<table class="body-table"> 
					<colgroup>
						<col style="width: 29%">
						<col style="width: 15%">
						<col style="width: 8%">
						<col style="width: 8%">
						<col style="width: 15%">
						<col style="width: 15%">
					</colgroup>
					<tbody id="billOfSales"></tbody>
				</table>
			</div>
		</div>
		<form class="form-horizontal" style="display: none;">
			<div class="control-group">
				<label class="control-label" for="deliveryShop"><span class="color-red">*</span>发件人</label>
				<div class="controls">
					<select id="deliveryShop" class="input-large"></select>
					<span class="help-block" style="display: none;">请输入选择发件人</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<label class="checkbox"></label>
				</div>
			</div>
		</form> 
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<button class="btn-common" onclick="printpreviewOfInvoice();" aria-hidden="true">打印预览</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- 打印快递单-->
<div id="prite-send-express" class="modal hide fade" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-536px;border-radius: 0;" data-backdrop="static">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>打印快递单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="express_select"><span class="color-red">*</span>选择快递</label>
				<div class="controls">
					<select id="express_select" class="select-common">
					<?php if(is_array($expressList) || $expressList instanceof \think\Collection || $expressList instanceof \think\Paginator): $i = 0; $__LIST__ = $expressList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
				<span><a href="<?php echo __URL('ADMIN_MAIN/express/expresscompany'); ?>" class="goToConfigure" style="text-decoration: underline;">前去配置</a></span>
			</div>
		</form> 
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table" style="margin-bottom: 0;border: 1px solid #ddd;border-bottom: 0;">
					<tr style="background: #F2F6FC;">
						<th style="width: 17.5%">订单编号</th>
						<th style="width: 28%">商品名称</th>
						<th style="width: 6%">已发货</th>
						<th style="width: 6%">已打印</th>
						<th style="width: 15%">快递公司</th>
						<th style="width: 18%">运单号</th>
					</tr>		
				</table>
			</div>
			<div class="data-table-body">
				<table class="table table-border-row body-table">
					<tbody id="InvoiceList-express" colspan="3">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<span class="tips">提示：<span style="color: #777;">选中的订单项运单号可实现自增,已发货的订单可修改快递公司和运单号</span></span>
		<button class="btn-common" id="expressPrinPreview" aria-hidden="true">打印预览</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- 批量发货 -->
<div id="not-shipped-order-list" role="dialog" class="modal hide fade" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" style="margin-left:-536px;border-radius: 0;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>批量发货</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="express_select"><span class="color-red">*</span>选择快递</label>
				<div class="controls">
					<select id="express_select_shipping" class="select-common">
					<?php if(is_array($expressList) || $expressList instanceof \think\Collection || $expressList instanceof \think\Paginator): $i = 0; $__LIST__ = $expressList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
				<span><a href="<?php echo __URL('ADMIN_MAIN/express/expresscompany'); ?>" class="goToConfigure" style="text-decoration: underline;">前去配置</a></span>
			</div>
		</form> 
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table">
					<tr style="background: #F2F6FC;">
						<th style="width: 17.5%">订单编号</th>
						<th style="width: 32.5%">商品名称</th>
						<th style="width: 15%">快递公司</th>
						<th style="width: 18%">运单号</th>
					</tr>		
				</table>
			</div>
			<div class="data-table-body" >
				<table class="table table-border-row body-table">
					<tbody id="notShippedOrderList">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn-common" id="confirm_delivery" aria-hidden="true">确认发货</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>



<script>
// 批量打印发货单
$("#BatchPrintinvoice").click(function () {
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		showInvoice();
	}
});
//显示批量打印发货单
function showInvoice() {

	$('#prite-send').modal('show');
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/order/getOrderInvoiceView'); ?>",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (invoiceDate) {
			if(invoiceDate.length > 0){
				for (var i = 0; i < invoiceDate.length; i++) {
					str += "<tr>";
					str += "<td><div class='cell'>" + invoiceDate[i].order_no + "</div></td>";
					str += "<td><div class='cell' title='" + invoiceDate[i].goods_name + "' style='width:370px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;'>" + invoiceDate[i].goods_name + "</div></td>";
					if(invoiceDate[i].express_company == null){
						str += "<td><div class='cell'></div></td>";
					}else{
						str += "<td><div class='cell'>" + invoiceDate[i].express_company + "</div></td>";
					}
					str += "<td><div class=;cell'>" + invoiceDate[i].express_no + "</div></td>";
					str += "</tr>";
				}
			}
		}
	});
	
	var deliverystr = "";
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getshopinfo'); ?>",
		dataType: "json",
		data: "oper=getType",
		success: function (deliveryDate) {

			deliverystr += "<option value='" + deliveryDate.shopId + "'>" + deliveryDate.shopName + "</option>";
			$("#deliveryShopInfo").html(deliverystr);
		}
	});
	
	$("#invoicePrinPreview").attr("onclick", "invoicePrinPreview('" + strIDs + "')");
	$("#InvoiceList").html(str);
	$('#prite-send').modal('show');
 
}

//打印预览 发货单
function invoicePrinPreview(ids) {
	var ShopName = $("#deliveryShopInfo option:selected").text();
	if (ids != "") {
		$("#invoicePrintingURL").attr("href", __URL("ADMIN_MAIN/order/printdeliverypreview?order_ids=" + ids + "&ShopName=" + ShopName + ""));
		document.getElementById("invoicePrintingURL").click();
	}
}

// 打印预览
function printPreview() {
	var printQueue = new Array();
	var checks = $("#contentForCheck input[type=checkbox]");

	// 将要打印的orderID 加入打印队列
	for (var i = 0; i < checks.length; i++) {
	
		var check = $("#" + checks[i].id).prop("checked");
	
		if (check == true) {
			var checkID = $(checks[i]).val();
			var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
			//printQueue.push(strID); //  将要打印的orderID 加入打印队列
			$.ajax({
				url: "<?php echo __URL('ADMIN_MAIN/order/printpreviewvalidate'); ?>",
				data: { "id": strID, "condition": "checkIsCanPrtint" },
				dataType: "json",
				async : false, // 让它同步执行
				success: function (returnData) {
					//	alert(returnData.retval);
					//	alert(returnData.outmessage);
					if (returnData.retval == "1") {
						printQueue.push(strID); //  将要打印的orderID 加入打印队列
					} else if (returnData.retval == "-2") {
						Show(returnData.outmessage, "prompt");
					} else if (returnData.retval == '-1') {
						Show(returnData.outmessage, "prompt");
						// alert('要打印的订单号为 ' + strID + ' 没有找到对应的快递公司');
					}
				}
			});
		}
	}
	if (printQueue.length > 0) {
		$("#expressSinglePrintURl").attr("href", __URL("ADMIN_MAIN/order/printexpresspreview?expressIDs=" + printQueue + "&sid="+$("#expressTemplate").val()));
		document.getElementById("expressSinglePrintURl").click();
	} else {
		Show("没有符合打印的订单！", "prompt");
	}
}


//打印出库单
$("#PrintShipping").click(function(){
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		printShipping();
	}
})
//显示出库单列表
function printShipping(){
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		type : "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getShippingList'); ?>",
		data: { "order_ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (data) {
			var str = "";
			if(data.length > 0){
				for (var i = 0; i < data.length; i++) {
					var item = data[i];
					str += '<tr style="border-bottom:1px solid #ddd;">';
					str += '<td><div class="cell">'+item['goods_name']+'</div></td>';
					str += '<td><div class="cell">'+item['sku_name']+'</div></td>';
					str += '<td align="center"><div class="cell">'+item['num']+'件</div></td>';
					if(item['stock'] == null){
						str += '<td align="center"><div class="cell">0件</div></td>';
					}else{
						str += '<td align="center"><div class="cell">'+item['stock']+'件</div></td>';
					}
					if(item['code'] == null){
						str += '<td><div class="cell"></div></td>';
					}else{
						str += '<td><div class="cell">'+item['code']+'</div></td>';
					}
					str += '<td class="right_border_none"><div class="cell" style="text-align:center;">';
					for (var t = 0; t < item["order_list"].length; t++ ){
							str += item["order_list"][t]["order_no"]+'<br>';
					}
					str += '</div></td>';
					str += '</tr>';
				}
			}
			$("#billOfSales").html(str);
		}
	})
	$('#print-billOfSales').modal('show');
}
//打印预览出库单
function printpreviewOfInvoice(){
	var order_ids = $("#print_select_ids").val();
	var ShopName = $("#deliveryShop option:selected").text();
	if (order_ids != "") {
		window.open('<?php echo __URL("ADMIN_MAIN/order/printpreviewOfInvoice?order_ids='+order_ids +'"); ?>');
	}
}


//批量打印快递单
$("#BatchPrint").click(function () {
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		showExpress();
	}
})
var invoiceDate = "";
//显示批量打印快递单
function showExpress() {
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/order/getorderexpresspreview'); ?>",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (data) {
			invoiceDate = data;
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					var item =  data[i];
					str += '<tr>';
					str += '<td style="width: 16.5%"><div class="cell">' + item['order_no'] + '</div></td>';
					str += '<td style="width: 29%"><div class="cell order_goods_name">' + item['goods_array']['0']['goods_name'] + '</div>';
					if(item['goods_array'].length > 1){
						str += '<a href="javascript:;" class="data_more_goods" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="click" title="全部商品" data-content="';
						for(var v = 0; v < item['goods_array'].length; v++){
							var vo = item['goods_array'][v];
							str += '<p class=\'popover_order_goods_name\' title=\''+ vo['goods_name'] +'\'>' + vo['goods_name'] + '</p>';
						}
						str += '"><img src="__STATIC__/blue/img/more.png" alt=""></a></td>';
					}
					if(item['is_devlier'] == 0){
						str += '<td style="width: 6%;text-align: center;">否</td>';
					}else{
						str += '<td style="width: 6%;text-align: center;">是</td>';
					}
					if(item['is_print'] == 0){
						str += '<td style="width: 6%;text-align: center;">否</td>';
					}else{
						str += '<td style="width: 6%;text-align: center;">是</td>';
					}
					//未发货
					if(item['is_devlier'] == 0){
						str += '<td style="width: 15%"><div class="cell data_express_company express_company_empty" data_express_company_id="' + item['express_company_id'] + '" order_id="'+ item['order_id'] +'">' + item['express_company_name'] + '</div></td>';
						str += '<td style="width: 18%">';
						str += '<div class="cell"><input type="text" class="input-common middle express_no_empty" style="margin-bottom: 0;width: 150px;" value="' + item['express_no'] + '" onkeyup="this.value=this.value.replace(/\\D/g,\'\')" maxlength="15" >';
						str += '<input type="checkbox" class="is_Increment" id="is_Increment_'+ i +'" checked ><label for="is_Increment_'+ i +'"></label>';
					}else{
					//已发货
						str += '<td style="width: 15%"><div class="cell cell_' + item['order_id'] + ' data_express_company"  data_express_company_id="' + item['express_company_id'] + '" order_id="'+ item['order_id'] +'" >' + item['express_company_name'] + '</div></td>';
						str += '<td style="width: 18%">';
						str += '<div class="cell"><input type="text" class="input-common middle" style="margin-bottom: 0;width: 150px;" value="' + item['express_no'] + '" onkeyup="this.value=this.value.replace(/\\D/g,\'\')" maxlength="15">';
						str += '<input type="checkbox" class="is_Increment" data_order_id="'+ item['order_id']+'" id="is_Increment_'+ i +'"><label for="is_Increment_'+  i +'"></label>';
					}
					str += '</div></td></tr>';
				}
			}
		}
	});
	$("#expressPrinPreview").attr("onclick","expressPrinPreview('" + strIDs + "')");
	$("#InvoiceList-express").html(str);
	$('[data-toggle="popover"]').popover();
	// //初始化默认快递公司信息
	var express_company_id = $("#express_select").val();
	var express_name = $("#express_select option:selected").text();

	if(express_company_id == null || express_company_id == 0){
		$(".goToConfigure").show();
		$("#express_select").html('<option value="0">暂未配置快递公司</option>');
		$("#expressPrinPreview").css({"background":"#ddd","color":"#777"});
	}else{
		$(".goToConfigure").hide();
		$("#expressPrinPreview").css({"background":"#006dcc","color":"#fff"});
		$(".express_company_empty").text(express_name);
		$(".express_company_empty").attr("data_express_company_id",express_company_id);
	}

	$('#prite-send-express').modal('show');
}

function express_no_is_empty(){
	var is_have_empty = true;
	var express_company_id = $("#express_select").val();
	if(express_company_id == null || express_company_id == 0){
		showTip("请配置物流公司",'error');
		$(".goToConfigure").show();
		return false;
	}else{
		$(".goToConfigure").hide();
	}
	$("#InvoiceList-express tr input[type='text']").each(function(i,e){
		if($(e).val().length == 0){
			$(e).focus();
			$(e).css({"border-color":"red", "box-shadow" : "inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)"});
			showTip("快递单号不可为空",'warning');
			is_have_empty =  false;
			return false;
		}else{
			$(e).css({"border-color":"#ccc","box-shadow":"none"});
			is_have_empty = true;
		}
	})
	return is_have_empty;
}

//打印预览 快递单
function expressPrinPreview(ids) {
	var print_order_arr = handle();
	var expressno_is_empty = express_no_is_empty();
	if(expressno_is_empty){
		$.ajax({
			type : "post",
			url : '<?php echo __URL("ADMIN_MAIN/order/addTmpExpressInformation"); ?>',
			data : {"print_order_arr" : JSON.stringify(print_order_arr)},
			success : function(data){
				//
			}
		})
		var ShopName = $("#deliveryShop option:selected").text();
		var print_order_ids = handlePrintInfo(ids);
		if (print_order_ids != "") {
			window.open(__URL("ADMIN_MAIN/order/printexpresspreview?print_order_ids=" + print_order_ids));
		}
	}
}  

function handlePrintInfo(ids){
	var arr = ids.split(",");
	var print_order_ids = "";
	for(var i = 0; i < arr.length; i++ ){
		var temp = new Array();
		$('[order_id="' + arr[i] + '"]').each(function(a,e){
			var vo_id = $(e).attr("data_express_company_id");
			if(vo_id != undefined && vo_id != ""){
				temp.push(vo_id);
			}
		})
		temp_str = temp.join(",");
		if(i == 0){
			print_order_ids += arr[i]+':'+temp_str
		}else{
			print_order_ids += ';'+arr[i]+':'+temp_str
		}
	}
	return print_order_ids;
}

//快递单自增
$(".express_no_empty:first-child").live("change", function(){
	var express_no = Number($(".express_no_empty:first-child").val());
	$(".express_no_empty").each(function(i,e){
		var order_id = $(e).attr("order_id");
		$(e).val(express_no + i);
		$('[data-order-id="'+order_id+'"]').val(express_no + i);
	})
})
//打印获取订单项临时快递单号
function handle(){
	$("#InvoiceList-express tr").each(function(i,e){
		var tmp_express_company_name = $(e).find(".data_express_company").text();
		var tmp_express_company_id = $(e).find(".data_express_company").attr("data_express_company_id");
		var tmp_express_no = $(e).find("input[type='text']").val();
		invoiceDate[i]["tmp_express_company_name"] = tmp_express_company_name;
		invoiceDate[i]["tmp_express_company_id"] = tmp_express_company_id;
		invoiceDate[i]["tmp_express_no"] = tmp_express_no;
	})
	return invoiceDate;
}
//快递单号是否参与自增
$(".is_Increment").live("click",function(){
	var order_id = $(this).attr("data_order_id");
	if($(this).is(":checked")){
		$(this).prev("input").addClass("express_no_empty");
		$(".cell_"+order_id).addClass("express_company_empty");
	}else{
		$(this).prev("input").removeClass("express_no_empty");
		$(".cell_"+order_id).removeClass("express_company_empty");
	}
})

//批量发货
$("#BatchShipment").click(function(){
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		showNotShippingOrderList();
	}
})

function showNotShippingOrderList(){
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		type : "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getNotshippedOrderList'); ?>",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (data) {
			invoiceDate = data;
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					var item =  data[i];
					if(item['goods_array'].length > 0){
						str += '<tr>';
						str += '<td style="width: 17.5%"><div class="cell">' + item['order_no'] + '</div></td>';
						str += '<td style="width: 32%"><div class="cell order_goods_name">' + item['goods_array']['0']['goods_name'] + '</div>';
						if(item['goods_array'].length > 1){
							str += '<a href="javascript:;" class="data_more_goods" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="click" title="全部商品" data-content="';
							for(var v = 0; v < item['goods_array'].length; v++){
								var vo = item['goods_array'][v];
								str += '<p class=\'popover_order_goods_name\' title=\''+ vo['goods_name'] +'\'>' + vo['goods_name'] + '</p>';
							}
							str += '"><img src="__STATIC__/blue/img/more.png" alt=""></a></td>';
						}
						str += '<td style="width: 15%"><div class="cell data_express_company express_company_empty" data_express_company_id="' + item['express_company_id'] + '" order_id="'+ item['order_id'] +'">' + item['express_company_name'] + '</div></td>';
						str += '<td style="width: 18%">';
						str += '<div class="cell"><input type="text" style="margin-bottom: 0;width: 150px;" value="' + item['express_no'] + '" onkeyup="this.value=this.value.replace(/\\D/g,\'\')" maxlength="15" class="express_no_empty input-common middle">';
						str += '</div></td></tr>';
					}
				}
			}
		}
	});
	$("#notShippedOrderList").html(str);
	// //初始化默认快递公司信息
	var express_company_id = $("#express_select_shipping").val();
	var express_name = $("#express_select_shipping option:selected").text();
	if(express_company_id == null || express_company_id == 0){
		$(".goToConfigure").show();
		$("#confirm_delivery").css({"background":"#ddd","color":"#777"});
		$("#express_select_shipping").html('<option value="0">暂未配置快递公司</option>');
	}else{
		$(".goToConfigure").hide();
		$("#confirm_delivery").css({"background":"#006dcc","color":"#fff"});
		$(".express_company_empty").text(express_name);
		$(".express_company_empty").attr("data_express_company_id",express_company_id);
	}

	$('[data-toggle="popover"]').popover();
	$('#not-shipped-order-list').modal('show');
}

//选择快递
$("#express_select").change(function(){
	var express_name = $("#express_select option:selected").text();
	var express_company_id = $("#express_select").val();
	$(".express_company_empty").text(express_name);
	$(".express_company_empty").attr("data_express_company_id",express_company_id);
})

$("#express_select_shipping").change(function(){
	var express_name = $("#express_select_shipping option:selected").text();
	var express_company_id = $("#express_select_shipping").val();
	$(".express_company_empty").text(express_name);
	$(".express_company_empty").attr("data_express_company_id",express_company_id);
})


//判断发货时订单号是否有空
function shipping_express_no_is_empty(){
	var is_have_empty = "";
	var express_company_id = $("#express_select_shipping").val();
	if(express_company_id == null || express_company_id == 0){
		showTip("请配置物流公司",'error');
		$(".goToConfigure").show();
		return false;
	}else{
		$(".goToConfigure").hide();
	}
	$("#notShippedOrderList tr input[type='text']").each(function(i,e){
		if($(e).val().length == 0){
			$(e).focus();
			$(e).css({"border-color":"red", "box-shadow" : "inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)"});
			showTip("快递单号不可为空",'warning');
			is_have_empty =  false;
			return false;
		}else{
			$(e).css({"border-color":"#ccc","box-shadow":"none"});
			is_have_empty = true;
		}
	})
	return is_have_empty;
}
//确认发货
$("#confirm_delivery").click(function(){
	var print_order_arr = handling_delivery_data();
	var expressno_is_empty = shipping_express_no_is_empty();
	if(expressno_is_empty){
		$.ajax({
			type : "post",
			url : '<?php echo __URL("ADMIN_MAIN/order/addTmpExpressInformation"); ?>',
			data : {"print_order_arr" : JSON.stringify(print_order_arr),"deliver_goods" : 1},
			success : function(data){
				$('#not-shipped-order-list').modal('hide');
				if(data["code"] == 1){
					showMessage("success","发货成功",location.href);
				}else{
					showMessage("error",data['message']);
				}
			}
		})
	}
})
//处理发货数据
function handling_delivery_data(){
	$("#notShippedOrderList tr").each(function(i,e){
		var tmp_express_company_name = $(e).find(".data_express_company").text();
		var tmp_express_company_id = $(e).find(".data_express_company").attr("data_express_company_id");
		var tmp_express_no = $(e).find("input[type='text']").val();
		invoiceDate[i]["tmp_express_company_name"] = tmp_express_company_name;
		invoiceDate[i]["tmp_express_company_id"] = tmp_express_company_id;
		invoiceDate[i]["tmp_express_no"] = tmp_express_no;
	})
	return invoiceDate;
}

//打印订单
$("#PrintOrder").click(function(){
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		window.open(__URL("ADMIN_MAIN/order/printOrder?print_order_ids=" + BatchSend.toString()));
	}
})
</script>