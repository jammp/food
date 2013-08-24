<?php include template("block_main_friendlink");?>
<script language="javascript">
	jQuery(function(){function c(){$(document).scrollTop()>0?$(".go-Top").fadeIn():$(".go-Top").fadeOut()}$(".go-Top a").click(function(){$(document).scrollTop(0);return false});$(window).scroll(function(){c()});c()});
</script>
<div class="go-Top">
	<a class="up" href="javascript:void(0);"><span>顶部</span></a>
</div>
<div id="ftw">
	<div id="ft">
		<p class="contact"><a href="/feedback/suggest.php">意见反馈</a></p>
		<ul class="cf">
			<li class="col">
				<h3>用户帮助</h3>
				<ul class="sub-list">
					<li><a href="/help/tour.php">玩转<?php echo $INI['system']['abbreviation']; ?></a></li>
					<li><a href="/help/faqs.php">常见问题</a></li>
					<li><a href="/help/zuitu.php"><?php echo $INI['system']['abbreviation']; ?>概念</a></li>
					
                    <?php if(option_yes('widget')){?><li><a href="/help/widget.php">团购挂件</a></li><?php }?>
				</ul>
			</li>

			<li class="col">
				<h3>合作联系</h3>
				<ul class="sub-list">
					<li><a href="/help/link.php">友情链接</a></li>
					<?php if(is_manager(false, true)){?>
					<li><a href="/manage/index.php">管理<?php echo $INI['system']['abbreviation']; ?></a></li>
					<?php }?>
				</ul>
			</li>
			<li class="col">
				<h3>公司信息</h3>
				<ul class="sub-list">
					<li><a href="/about/us.php">关于<?php echo $INI['system']['abbreviation']; ?></a></li>
					<li><a href="/about/job.php">工作机会</a></li>
					<li><a href="/about/contact.php">联系方式</a></li>
					<li><a href="/about/terms.php">用户协议</a></li>
				</ul>
			</li>
			<li class="col end">
					<div class="logo-footer">
						<a href="/"><img src="/static/css/i/logo-footer.gif" /></a>
					</div>
			</li>
		</ul>
		<div class="copyright">
		<p>&copy;<span>2010</span>&nbsp;<?php echo $INI['system']['sitename']; ?>（zuitu.com）版权所有&nbsp;<a href="/about/terms.php">使用<?php echo $INI['system']['abbreviation']; ?>前必读</a>&nbsp;<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $INI['system']['icp']; ?></a>&nbsp;<?php if($INI['system']['statcode']){?>&nbsp;<?php echo $INI['system']['statcode']; ?><?php }?></p>
		</div>
		</div>
	</div>
</div>
<?php include template("html_footer");?>
