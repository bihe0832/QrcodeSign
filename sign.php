<?php 
require_once (dirname(__FILE__).'/conf/config.php'); 
/**
 * 来宾签到
 * @author hardyshi bihe0832@foxmail.com
 */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<title><?php echo WEB_TITLE; ?></title>
<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
	WeixinJSBridge.call('hideOptionMenu');
});	
</script>
<link rel="stylesheet" href="./css/global.css?46" type="text/css" media="screen" />
<link rel = "Shortcut Icon" href="http://zixie.sinaapp.com/resource/images/zixie_32.ico">
</head>
<body>
<?php 
$cookieInfo = $_COOKIE["wechat"];
$attenderID = htmlspecialchars($_GET["k"]);
if(!$cookieInfo || $cookieInfo != KEY){
	$url = REDICT_URL;
	//echo $url;
	echo '<script type="text/javascript">window.location="'.$url.'"</script>';
}
?>
<div class="vote">
		<span id="title">现场签到</span>
		<ul id="content">
			<li>来宾姓名：<span id="name"></span></li>
			<li>报名状态：<span id="status"></span></li>
			<li class="last">参会类别：<span id="is_special"></span></li>
		</ul>
		<p id="tips"><?php echo SIGN_TIPS; ?></p>
		<p>
			<a id="userSign" class="butt" href='#'>确认签到</a>
			<a id="ScanQRCode" class="butt" href='javascript:WeixinJSBridge.invoke("scanQRCode");'>继续扫码</a>
		</p>
</div>
<div id="show" class="show" style="display:none">
	<div class="tipsTitle">腾讯游戏投资公司沙龙</div>
<HR class="tipsHr">
	<div class="tipsContent" id="tipsContent">您已经签到成功！</div>
	<HR class="tipsHr">
	<div class="tipsBtn" onClick="javascript:hideTips();">确定</div>
</div>
<script type="text/javascript" src="./js/global.js?46" charset="UTF-8"></script>
<script type="text/javascript">
window.onload=function(){
	Meeting.attenderID = '<?php echo $attenderID;?>';
	/************************************效果展示代码开始****************************************/
	//以下部分代码为测试效果，最终正式环境请使用exit后面的CGI获取用户状态
	var type = "<?php echo htmlspecialchars($_GET["k"]);?>";
	switch(type){
		case "openid1":
			//没有报名
			eval('var result = {"ecode":-1,"msg":"no attender"}');
			break;
		case "openid2":
			//资料审核未通过
			eval('var result = {"ecode":1,"msg":{"name":"子勰","is_special":"0","status":"0"}}');
			break;
		case "openid3":
			//普通
			eval('var result = {"ecode":1,"msg":{"name":"子勰","is_special":"0","status":"2"}}');
			break;
		case "openid4":
			//嘉宾
			eval('var result = {"ecode":1,"msg":{"name":"子勰","is_special":"1","status":"2"}}');
		case "openid5":
			//媒体
			eval('var result = {"ecode":1,"msg":{"name":"子勰","is_special":"2","status":"2"}}');
			break;
		case "openid6":
			//特殊类别3
			eval('var result = {"ecode":1,"msg":{"name":"子勰","is_special":"3","status":"2"}}');
			break;
		case "openid7":
			//已经签到
			eval('var result = {"ecode":1,"msg":{"name":"子勰","is_special":"1","status":"3"}}');
			break;
		default:
			break;
	}
	
	signInit(result);
	return;
	/************************************效果展示代码结束****************************************/
	
	//为方便本地调试，屏蔽了异步调试请求，当使用者开发完对应CGI以后替换上面代码即可
	var JSONP=document.createElement("script");   
	JSONP.type="text/javascript";   
	JSONP.src="http://microdemo.sinaapp.com/qrcodeSign/roadshow.cgi.php?cmd=101001&id=<?php echo $attenderID;?>&callback=signInit";   
	document.getElementsByTagName("head")[0].appendChild(JSONP); 
}
</script>
</body></html>

