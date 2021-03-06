<?php include template("header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="help">
	<div class="dashboard" id="dashboard">
		<ul><?php echo current_help('faqs'); ?></ul>
	</div>
	<div id="content" class="faq clear">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>常见问题</h2></div>
                <div class="sect"><?php echo $page['value']; ?></div>
            </div>
            <div class="box-bottom"></div>
        </div>
	</div>
    <div id="sidebar">
        <div class="sbox-white">
            <div class="sbox-top"></div>
            <div class="sbox-content">
                <div class="side-tip-help">
                    <p>
                        <a href="/help/zuitu.php"><img src="/static/img/faq-how-it-works1.gif"></a>
                        <span>A.每天推出一单精品消费</span>
                    </p>
                    <p>
                        <a href="/help/zuitu.php"><img src="/static/img/faq-how-it-works2.gif"></a>
                        <span>B.凑够人数享受无敌折扣</span>
                    </p>
                    <p>
                        <a href="/help/zuitu.php"><img src="/static/img/faq-how-it-works3.gif"></a>
                        <span>C.明天再来看又有新惊喜</span>
                    </p>
                </div>
            </div>
            <div class="sbox-bottom"></div>
        </div>
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
