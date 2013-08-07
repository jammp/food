<?php include template("header");?>
<style type="text/css">
<!--

ul.comments {
	margin: 20px 0 20px 0;
}

ul.comments li {
	border-bottom: 1px #aeaeae dashed;
	padding: 10px 0px;
}

ul.comments li img {
	border: 1px #aeaeae solid;
}

ul.comments li .comment_content {
	float: left;
	margin-left: 10px;
}

ul.comments li .comment_content .title {
	background: #ececec;
	display: block;
	width: 450px;
	padding: 0px 5px;
}

ul.comments li .comment_content .content {
	width: 450px;
	display: block;
	word-wrap:break-word;
    border: 0;
	overflow: hidden;
	font-size: 14px;
	
}

ul.comments li .deal_pic {
	float: left;
	width:65px;
	margin-top:15px;
}
ul.comments li .username {
display:block;
}

-->
</style>
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="learn">
	<div id="content" class="about clear">
        <div class="box">
            <div class="box-top"></div>
	          <div class="box-content cf" style="padding:15px;">
                <div class="head"><h2>买家点评</h2></div>
	              <p>这里是在<?php echo $INI['system']['sitename']; ?>购物过的朋友留下的评价。您也可以在"我的<?php echo $INI['system']['abbreviation']; ?>"下方的"我的订单"里面给已经发货的订单评价哦~</p>
                  <ul class="comments">
				     <?php if(is_array($orders)){foreach($orders AS $index=>$one) { ?>
				     <li>
					    <div class="deal_pic">
                            <?php if($users[$one['user_id']]['avatar']){?>
							<img src="/static/<?php echo $users[$one['user_id']]['avatar']; ?>" style="float:left;margin-top:-10px;margin-right:10px;width:50px;height:50px;"/>
							<?php } else { ?>
                            <img src="/static/css/i/user_head_default.jpg" style="float:left;margin-top:-10px;margin-right:10px;width:50px;height:50px;"/>
	                        <?php }?>
							<div class="username"><?php echo $users[$one['user_id']]['username']; ?></div>
                        </div>
                        <div class="comment_content">
                           <p class="title"> 评价了TA在<?php echo $INI['system']['sitename']; ?>买到的 <a class="deal-title" href="/team.php?id=<?php echo $one['team_id']; ?>" target="_blank"><?php echo $teams[$one['team_id']]['title']; ?></a></p>
                           <p class="content"><?php echo $one['comment_content']; ?></p>
                        </div>
                        <div class="clear"></div>
					</li>
				    <?php }}?>
				 </ul>
				  <div><?php echo $pagestring; ?></div>
			  </div>
            <div class="box-bottom"></div>
        </div>
	</div>
	<div id="sidebar">
		<?php include template("block_side_business");?>
		<?php include template("block_side_vote");?>
		<?php include template("block_side_subscribe");?>
	</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
