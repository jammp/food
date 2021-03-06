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
					<h2>地址重写</h2>
					<ul class="filter"><?php echo current_system_option($s); ?></ul>
				</div>
                <div class="sect">
                    <form method="post">
						<div class="wholetip clear"><h3>1、地址重写</h3></div>
                        <div class="field">
                            <label>城市切换</label>
							<select name="option[rewritecity]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('rewritecity')); ?></select><span class="inputtip">以 "/cityname" 形式重写首页网址</span>
						</div>
                        <div class="field">
                            <label>团购项目</label>
							<select name="option[rewriteteam]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('rewriteteam')); ?></select><span class="inputtip">以 "/team/12345.html" 形式重写项目页面网址</span>
						</div>
                        <div class="field">
                            <label>品牌商户</label>
							<select name="option[rewritepartner]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('rewritepartner')); ?></select><span class="inputtip">以 "/partner/12345.html" 形式重写商户页面网址</span>
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
