<?php
/**
 * 会议配置的基本信息
 * 备注：目前绝大部分页面的配置都已经在这里了，只有签到页面获取用户基本信息和发送签到结果的两个CGI需要单独去配置
 * @author	hardyshi	code@bihe0832.com
 *
 */

//签到页面URL
define("SIGN_URL", "http://microdemo.bihe0832.com/QrcodeSign/sign.php");
//非授权设备扫描二维码跳转地址
define("REDICT_URL", "http://microdemo.bihe0832.com/QrcodeSign/intro.php");
//在签到页面配置的cookie的值
define("KEY", "meeting");
//为工作人员手机授权时访问页面需要添加的key值，建议较长
define("ADMIN", "EWJKUIEWELMEWL3289893423JESJEEEWHEWHUY2837");
//会议名称，将会显示在获取二维码的页面
define("MEETING_NAME", "牛叉的大会");
//所有web页面的标题
define("WEB_TITLE",  "欢迎参加".MEETING_NAME);
//大会介绍指引页面的文字介绍，页面的排版效果与下方的文字排版无关
define("CONTENT",  
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。".
	"开会了开会了，大家快来开会了。"
);
//签到页面下方的小提示
define("SIGN_TIPS",  "会场提供有免费WIFI；账号：FreeWifi；密码：zixie");
//签到页面默认的二维码，如果二维码接口故障了，所有人入场券默认指向这里
define("QRCODE_URL",  "http://microdemo.bihe0832.com/QrcodeSign/images/intro.png");
?>