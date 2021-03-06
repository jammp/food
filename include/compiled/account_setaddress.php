<?php include template("header");?>
<style>
.box-content{ clear: both;height: auto !important;min-height: 400px;}
#address-list {margin-bottom: 30px;}
#address-list li {padding: 5px 10px;}
#address-list .alt {background-color: #F2F2F2;}
#address-list .info {float: left;padding: 2px 0;width: 555px;}
#address-list .info p {color: #000000;padding: 2px 0;}
#address-list .info .consignee {color: #666666;}
#address-list .info .consignee span {display: inline-block;width: 92px;}
#address-list .action {float: right;width: 76px;}
#address-list .action li {font-size: 12px;padding: 0;text-align: right;}
#address-list .hidden li a{visibility:hidden;}
#address-list .prompt {padding-top: 20px;}
#address-list .prompt a {color: #339999;text-decoration: none;font-weight: bold;}
#content .address-table{margin:5px 0 5px;}
#content .address-table th{width:95px;vertical-align:top;padding:5px 0;font-weight:normal;text-align:right;}
#content .address-table td{padding:5px;width:540px;}
#content .address-province{width:140px;margin-right:15px;}
#content .address-city{width:140px;margin-right:15px;}
#content .address-district{width:140px;margin-right:15px;}
#content .address-biz{width:140px;margin-right:15px;}
#content .address-building{width:140px;margin-right:15px;}
#content .address-zipcode{width:120px;}
#content .address-detail{width:470px;}
#content .address-city-detail{width:270px;}
#content .address-name{width:120px;}
#content .address-phone{width:120px;}
#content .address-floor{width:40px;}
#content .address-room{width:60px;}
</style>
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="consult">
	<div class="dashboard" id="dashboard">
		<ul><?php echo current_account('/account/settings.php'); ?></ul>
	</div>
	<div id="content">
		<div class="box clear">
			<div class="box-top"></div>
			<div class="box-content">
				<div class="head">
					<h2>收货地址</h2>
					<ul class="filter">
						<li><a href="/account/settings.php">帐户设置</a></li>
						<li><a href="/credit/index.php">帐户余额</a></li>
						<li><a href="/account/myask.php">我的问答</a></li>
						<li><a href="/account/setbinds.php">手机绑定</a></li>
						<li class="current"><a href="/account/setaddress.php">收货地址</a></li>
					</ul>
				</div>
				<div class="sect consult-list">
					<ol id="address-list">
						<?php if(is_array($add)){foreach($add AS $index=>$one) { ?>
						<li class="<?php echo $index++%2?'alt':''; ?> cf">
							<div class="info">
								<p><?php echo $one['province']; ?> &nbsp; <?php echo $one['area']; ?> &nbsp;  <?php echo $one['city']; ?> &nbsp;<?php echo $one['street']; ?>，<?php echo $one['zipcode']; ?></p>
								<p class="consignee">
								<span><?php echo $one['name']; ?></span>
								<?php echo $one['mobile']; ?>
								</p>
							</div>
							<ul class="action hidden">
							<?php if($one['default']=='Y'){?>
							<li id="address-default"><span>默认地址</span></li>
							<?php }?>
							<li <?php if($one['default']=='Y'){?> style="display:none;" <?php }?> >
						    <a href="/account/ajax.php?action=setdefault&id=<?php echo $one['id']; ?>" class="ajaxlink">设为默认地址</a>
							</li>
							<li><a href="/account/ajax.php?action=deladd&id=<?php echo $one['id']; ?>" class="ajaxlink" ask="确定删除该地址吗？">删除</a></li>
							</ul>
							<div class="clear"></div>
						</li>
						<?php }}?>
						<li class="prompt">
							<a href="javascript:void(0);" class="add">添加新地址&#187;</a>
							</li>
							<form id="address-form0" action="/account/setaddress.php" method="POST" style="display:none;" class="validator">
							<table id="address-table0" class="address-table"><tr><th>省市区</th><td><div id="area-container0"><select name="province"  id="s1" id="province" class="f-input" style="width:140px;margin:2px 15px 2px 0;" require="true" datatype="require"><option value="">-----</option></select><select style="width:140px;margin:2px 15px 2px 2px;" id="s2" name="area" class="f-input" require="true" datatype="require"><option value="">-----</option></select><select style="width:140px;margin:2px 15px 2px 2px;" id="s3" name="city" class="f-input" ><option value="">-----</option></select></div><div id="address-district-error0" class="blk-error"></div></td></tr><tr><th>街道地址</th><td><input type="text" maxlength="60" size="60" name="street" id="address-detail0" class="f-input address-detail" require="true" datatype="require" /><div id="address-detail-error0" class="blk-error"></div></td></tr><tr><th>邮政编码</th><td><input id="address-zipcode0" class="f-input address-zipcode" type="text" require="true" datatype="zip" maxLength="6" size="10" name="zipcode"   /><div id="address-zipcode-error0" class="blk-error"></div></td></tr><tr><th>收货人姓名</th><td><input type="text" maxlength="15" size="15" name="name" id="address-name0" class="f-input address-name"  require="true" datatype="require" /><div id="address-name-error0" class="blk-error"></div></td></tr><tr><th><label for="address-phone0">电话号码</label></th><td><input id="address-phone0" class="f-input address-phone" type="text" require="true" datatype="mobile" maxLength="11" size="15" name="mobile"  /><div id="address-phone-error0" class="blk-error"></div></td></tr><tr><th></th><td><input type="submit" class="formbutton" value="保存" />&nbsp;&nbsp;<a href="#" class="address-cancel">取消</a></td></tr></table>
							</form>
					</ol> 						 					
				   <div>
				      
				   </div>
				</div>                 
			</div>
			<div class="box-bottom"></div>
		</div>
	</div>
	<div id="sidebar">
	<?php include template("block_side_invite");?>
	</div>
<script type="text/javascript" src="/static/js/city.js"></script>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->
<script language="javascript">
$(function(){
	$('.add').click(function(){
		if($('#address-form0').is(":visible")){
			$('#address-form0').css('display','none') ;
		}else{
			$('#address-form0').css('display','block') ;
		}
	});
	$('.address-cancel').click(function(){
		$('#address-form0').css('display','none') ;
	});

	$(".cf").hover(
		function () {
		$(this).children("ul").removeClass("hidden");
	},
		function () {
		$(this).children("ul").addClass("hidden");
	});
});
</script>
<script>
setupcity();
</script>
<?php include template("footer");?>
