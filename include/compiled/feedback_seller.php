<?php include template("header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="feedback">
    <div id="content" class="clear">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>提供团购信息</h2></div>
                <div class="sect">
					<p class="notice">特别欢迎优质商家、淘宝大卖家提供团购信息。</p>
                    <form id="feedback-user-form" method="post" action="/feedback/seller.php" class="validator">
                        <div class="field fullname">
                            <label for="feedback-fullname">您的称呼</label>
                            <input type="text" size="30" name="title" id="feedback-fullname" class="f-input" value="<?php echo $login_user['username']; ?>" require="true" datatype="require" />
                        </div> 
                        <div class="field email">
                            <label for="feedback-email-address">联系方式</label>
                            <input type="text" size="30" name="contact" id="feedback-email-address" class="f-input" value="<?php echo $login_user['email']; ?>" require="true" datatype="require" />
                            <span class="hint">请留下您的手机、QQ号或邮箱，方便联系</span>
                        </div>
                        <div class="field suggest">
                            <label for="feedback-suggest">团购信息</label>
                            <textarea cols="30" rows="5" name="content" id="feedback-suggest" class="f-textarea" require="true" datatype="require"></textarea>
                        </div>
					<?php if(option_yes('verifyfeedback')){?>
						<?php include template("block_block_captcha");?>
					<?php }?>
                        <div class="clear"></div>
                        <div class="act">
                            <input type="submit" value="提交" name="commit" id="feedback-submit" class="formbutton"/>
                        </div>
                    </form>
				</div>
            </div>
            <div class="box-bottom"></div>
        </div>
	</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
