<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');

$daytime=strtotime(date('Ymd')." +5 day");

$condition = array( 
		'city_id' => array(0, abs(intval($city['id']))),
		"begin_time >  {$daytime}",
		'team_type' => 'normal',	//kxx 增加
		);

$count = Table::Count('team', $condition);
list($pagesize, $offset, $pagestring) = pagestring($count, 1000);
$teams = DB::LimitQuery('team', array(
			'condition' => $condition,
			'order' => 'ORDER BY begin_time ASC, id DESC',
			'size' => $pagesize,
			'offset' => $offset,
			));
foreach($teams AS $id=>$one){
	team_state($one);
	$one['picclass'] = null;
	$teams[$id] = $one;
}

$pagetitle = '菜单预告';
include template('team_current');
