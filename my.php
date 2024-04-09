<!doctype html>
<html>
<?php 
/**
 * 二维码入场券获取页面
 * @author zixie	code@bihe0832.com
 */
require_once (dirname(__FILE__).'/conf/config.php');
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<title><?php echo WEB_TITLE; ?></title>
<link rel = "Shortcut Icon" href="http://game.bihe0832.com/resource/images/zixie_32.ico">
<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
	WeixinJSBridge.call('hideOptionMenu');
});	
</script>
<link rel="stylesheet" href="./css/global.css" type="text/css" media="screen" />
</head>
<body>
<?php 
	$attenderID = htmlspecialchars($_GET["id"]);
?>
<form action="sign_result.php" method="post" id="userInfo">
<div class="vote">
		<span id="title">我的入场券</span><BR>
		<img style="text-align:center" src="http://qr.liantu.com/api.php?m=15&w=180&text=<?php echo SIGN_URL?>?k=<?php echo $attenderID;?>#wechat_webview_type=1"/>
		<p><?php echo MEETING_NAME;?></p>
		<p id="tips">
			注意事项：<BR>
			1.入场券是大会入场的唯一凭证，请妥善保管，切勿转发！<BR>
			2.为了保证您顺利签到入场，建议提前下载保存入场券（长按图片，在弹出的对话框选择保存）！
		</p>
</div>
</form>
<script type="text/javascript" src="https://tajs.qq.com/stats?sId=25799863" charset="UTF-8"></script>
</body>
</html>
