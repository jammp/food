<?php include template("manage_header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="partner">
	<div class="dashboard" id="dashboard">
		<ul><?php echo mcurrent_system('option'); ?></ul>
	</div>
	<div id="content" class="clear mainwide">
        <div class="clear box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head">
					<h2>登录设置</h2>
					<ul class="filter"><?php echo current_system_option($s); ?></ul>
				</div>
                <div class="sect">
                    <form method="post">
						<div class="wholetip clear"><h3>1、新浪微博登录</h3></div>
						<div class="field">
                            <label>App Key</label>
                            <input type="text" size="30" name="sina[key]" class="f-input" value="<?php echo $INI['sina']['key']; ?>" style="width:300px;"/><span class="inputtip"><a href="http://open.weibo.com/website.php" target="_blank">申请网站APP key</a></span>
                        </div>
                        <div class="field">
                            <label>App Secret</label>
                            <input type="text" size="30" name="sina[sec]" class="f-input" value="<?php echo $INI['sina']['sec']; ?>" style="width:300px;"/>
                        </div>
                        <div class="field">
                            <label>新浪微博登录</label>
							<select name="option[sinalogin]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('sinalogin')); ?></select><span class="inputtip">是否开启新浪微博登录</span>
                        </div>
                        <div class="field">
                            <label>首次登录绑定</label>
							<select name="option[firstsinalogin]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('firstsinalogin')); ?></select><span class="inputtip">是否开启首次用新浪微博账号登录后绑定(或新建)账号</span>
                        </div>
						<div class="wholetip clear"><h3>2、腾讯微博登录</h3></div>
						<div class="field">
                            <label>App Key</label>
                            <input type="text" size="30" name="qq[key]" class="f-input" value="<?php echo $INI['qq']['key']; ?>" style="width:300px;"/><span class="inputtip"><a href="http://open.t.qq.com/apps_welcome.php" target="_blank">申请网站APP key</a></span>
                        </div>
                        <div class="field">
                            <label>App Secret</label>
                            <input type="text" size="30" name="qq[sec]" class="f-input" value="<?php echo $INI['qq']['sec']; ?>" style="width:300px;"/>
                        </div>
						<div class="field">
                            <label>腾讯微博登录</label>
							<select name="option[qqlogin]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('qqlogin')); ?></select><span class="inputtip">是否开启腾讯微博登录</span>
                        </div>
                        <div class="field">
                            <label>首次登录绑定</label>
							<select name="option[firstqqlogin]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('firstqqlogin')); ?></select><span class="inputtip">是否开启首次用腾讯微博账号登录后绑定(或新建)账号</span>
                        </div>
						<div class="wholetip clear"><h3>3、QQ空间登录</h3></div>
						<div class="field">
                            <label>App ID</label>
                            <input type="text" size="30" name="qzone[key]" class="f-input" value="<?php echo $INI['qzone']['key']; ?>" style="width:300px;"/><span class="inputtip"><a href="http://connect.opensns.qq.com/" target="_blank">申请网站APP key</a></span>
                        </div>
                        <div class="field">
                            <label>App KEY</label>
                            <input type="text" size="30" name="qzone[sec]" class="f-input" value="<?php echo $INI['qzone']['sec']; ?>" style="width:300px;"/>
                        </div>
						<div class="field">
                            <label>QQ空间登录</label>
							<select name="option[qzonelogin]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('qzonelogin')); ?></select><span class="inputtip">是否开启QQ空间登录</span>
                        </div>
                        <div class="field">
                            <label>首次登录绑定</label>
							<select name="option[firstqzonelogin]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('firstqzonelogin')); ?></select><span class="inputtip">是否开启首次用QQ空间登录后绑定(或新建)账号</span>
                        </div>
						<div class="act">
                            <input type="submit" value="保存" name="commit" class="formbutton" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
	</div>

<div id="sidebar">
</div>

</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("manage_footer");?>
