<?php 
/**
 * 为所用用于签到的设备授权，
 * @author hardyshi code@bihe0832.com
 */
require_once (dirname(__FILE__).'/conf/config.php'); 
$key = htmlentities($_GET["k"]);
if($key == ADMIN ){
	setcookie("wechat", KEY, time()+3600 *24);
	$url = SIGN_URL;
	//echo $url;
	echo '<script type="text/javascript">window.location="'.$url.'"</script>';
}else{
	setcookie("wechat", "", time()-3600);
	$url = REDICT_URL;
	//echo $url;
	echo '<script type="text/javascript">window.location="'.$url.'"</script>';
}
?>
<html>
<body>

</body>
</html>