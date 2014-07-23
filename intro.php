<?php require_once (dirname(__FILE__).'/conf/config.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<title><?php echo WEB_TITLE; ?></title>
<link rel = "Shortcut Icon" href="http://zixie.sinaapp.com/resource/images/zixie_32.ico">
<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
	WeixinJSBridge.call('hideOptionMenu');
});	
</script>
<link rel="stylesheet" href="./css/global.css" type="text/css" media="screen" />
</head>
<body>
<form action="product_result.php" method="post" id="userInfo">
<div class="vote">
	<span id="title">大会介绍</span>
	<ul><li>&nbsp;</li></ul>
	<p id="info_up"><?php echo CONTENT; ?></p>
	<p id="info_down">更多大会相关资讯， 敬请关注官方后续消息推送。</p>
</div>
</form>
<!-- 统计用JS,不用可以删除 -->
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=25799863" charset="UTF-8"></script>
</body>
</html>