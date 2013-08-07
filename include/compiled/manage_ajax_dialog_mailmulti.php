<div id="order-pay-dialog" class="order-pay-dialog-c" style="width:600px;">
	<h3><span id="order-pay-dialog-close" class="close" onclick="return X.boxClose();">关闭</span></h3>
	<div style="overflow-x:hidden;padding:10px;" id="dialog-order-id" oid="<?php echo $order['id']; ?>">
	<table width="96%" align="center" class="coupons-table">	    

	<tr><td><b>项目列表：</b></td>
		<td>
		<?php if(is_array($teams)){foreach($teams AS $index=>$one) { ?>
		<input type="checkbox" value="<?php echo $one['id']; ?>" name="team" > <?php echo mb_strimwidth($one['product'],0,90,'...'); ?> &nbsp;&nbsp;
		<br />
		<?php }}?>
		</td>
	</tr>
    <tr>
	 <td><button style="padding:0;" id="dialog_subscribe_button_id" onclick="if(confirm('发送邮件过程中，请耐心等待，同意吗？')){this.disabled=true;return X.misc.noticeall(0);}">发送邮件&nbsp;(<?php echo $subcount; ?>)</button>
	</td>
	 <td></td>
	</tr>
	</table>	
	</div>
</div>

<script type="text/javascript">
X.misc.noticeall = function(nid) { 
	var teams =[];    
		$('input[name="team"]:checked').each(function(){    
			teams.push($(this).val());    
	});
	return X.get(WEB_ROOT + '/ajax/subscribe.php?action=noticesubscribe&tid='+teams+'&nid='+nid);
};
</script>