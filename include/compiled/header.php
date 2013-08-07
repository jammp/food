<?php include template("html_header");?>

<div id="hdw">
	<div id="hd">
		<div id="logo">
			<a href="/index.php" class="link">
				<!--<img src="/static/css/i/logo.gif" alt="<?php echo $INI['system']['sitename']; ?>" />-->
				<span><?php echo $INI['system']['sitename']; ?></span>
			</a>
		</div>
		<div class="guides">
			<div class="city">
				<h2><?php echo $city['name']; ?></h2>
			</div>
			<?php if(count($hotcities)>1){?>
			<div id="guides-city-change" class="change">切换城市</div>
			<div id="guides-city-list" class="city-list">
				<ul><?php echo current_city($city['ename'], $hotcities); ?></ul>
				<div class="other"><a href="/city.php">其他城市？</a></div>
			</div>
			<?php }?>
		</div>
		<div id="header-subscribe-body" class="subscribe">
		<!--
		<form action="/subscribe.php" method="post" id="header-subscribe-form">
			<label for="header-subscribe-email" class="text">想知道<?php echo $city['name']; ?>明天的团购是什么吗？</label>
			<input type="hidden" name="city_id" value="<?php echo $city['id']; ?>" />
			<input id="header-subscribe-email" type="text" xtip="输入Email，订阅每日团购信息..." value="" class="f-text" name="email" />
			<input type="hidden" value="1" name="cityid" />
			<input type="submit" class="commit" value="订阅" />
		</form>-->
		<?php if(option_yes('smssubscribe')){?>
		<span><a class="sms" onclick="X.miscajax('sms','subscribe');">&raquo; 短信订阅，免费！</a>&nbsp; <a class="sms" onclick="X.miscajax('sms','unsubscribe');">&raquo; 取消手机订阅</a></span>
		<?php }?>
		</div>
		<ul class="nav cf"><?php include template("block_navigator");?></ul>
		<div class="logins">
		<?php if($login_user){?>
			<ul class="links">
				<li class="username">欢迎您，<?php if($_SESSION['ali_token']){?>
				<?php echo mb_strimwidth($login_user['realname'],0,10); ?>！
                <?php } else { ?>
				<?php echo mb_strimwidth($login_user['username'],0,10); ?>！
				<?php }?></li>
				<li class="account"><a href="/order/index.php" id="myaccount" class="account">我的<?php echo $INI['system']['abbreviation']; ?></a></li>
				<li class="logout"><a href="/account/logout.php">退出</a></li>
			</ul>
		<?php } else { ?>
			<ul class="links">
				<li class="login"><a href="/account/login.php">登录</a></li>
				<li class="signup"><a href="/account/signup.php">注册</a></li>
			</ul>
		<?php }?>
			<div class="line islogin"></div>
		</div>
	<?php if($login_user){?>
		<ul id="myaccount-menu"><?php echo current_account(null); ?></ul>
	<?php }?>
	</div>
</div>

<?php if($session_notice=Session::Get('notice',true)){?>
<div class="sysmsgw" id="sysmsg-success"><div class="sysmsg"><p><?php echo $session_notice; ?></p><span class="close">关闭</span></div></div> 
<?php }?>
<?php if($session_notice=Session::Get('error',true)){?>
<div class="sysmsgw" id="sysmsg-error"><div class="sysmsg"><p><?php echo $session_notice; ?></p><span class="close">关闭</span></div></div> 
<?php }?>
