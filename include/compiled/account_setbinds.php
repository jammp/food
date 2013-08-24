<?php include template("header");?>
<style>
 .whybind{margin:60px 10px 10px;padding:10px;zoom:1;font-size:12px;background:#fffbcc;border:1px solid #ffec19;}
 .whybind h3{margin-bottom:5px;font-size:14px;}
 .whybind ol{padding-left:10px;}
 .whybind ol li{list-style-position:inside;list-style-type:decimal;}

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
					<h2>手机绑定</h2>
					<ul class="filter">
						<li><a href="/account/settings.php">帐户设置</a></li>
						<li><a href="/credit/index.php">帐户余额</a></li>
						<li><a href="/account/myask.php">我的问答</a></li>
						<li class="current"><a href="/account/setbinds.php">手机绑定</a></li>
						<li><a href="/account/setaddress.php">收货地址</a></li>
					</ul>
				</div>
				<div class="sect consult-list">
					<?php if(!$havemobile){?>
					<h3>尚未绑定手机号，请先绑定：</h3>
					
					<div style="margin-top:20px;"><a href="javascript:;" onclick="X.bindajax('sms','loginbindmobile','<?php echo $login_user_id; ?>');">点击绑定手机号码</a></div>
					<?php } else { ?>
                    <h3>已绑定的手机号：</h3>
                    <table cellspacing="0" cellpadding="0" border="0" class="coupons-table" id="bind-mobile-list">
                    <tr class="alt"><td class="mobile"><strong><?php echo $havemobile['tools']; ?></strong></td></tr></table>

                    <div class="clear"></div>
					 <h3>绑定新手机号：</h3>
                        <div style="margin-top:20px;"><a href="javascript:;" onclick="X.bindajax('sms','loginbindmobile','<?php echo $login_user_id; ?>');">点击绑定新手机号</a></div>

                        <span class="hint">注意：绑定新手机号将会清空所有已绑定的手机号</span>
					<?php }?>				
                    					 					
				   <div>
				     <div class="whybind">
                      <h3>为什么要绑定您的手机呢？</h3>
                      <ol>
                      <li>手机找回密码（遗忘密码的时候通过手机轻易找回）</li>
                      <li>绑定手机后，可以购买特殊商品</li>
                      <li>便于我们为您提供更好的服务</li>
                      </ol>
                     </div>
				   </div>
				</div>                 
			</div>
			<div class="box-bottom"></div>
		</div>
	</div>
	<div id="sidebar">
	<?php include template("block_side_invite");?>
	</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
