<?php 
/**
 * 清楚所有扫码设备上的授权
 * @author hardyshi bihe0832@foxmail.com
 */
require_once (dirname(__FILE__).'/conf/config.php'); 
setcookie("wechat", "", time()-3600);
$url = REDICT_URL;
//echo $url;
echo '<script type="text/javascript">window.location="'.$url.'"</script>';
?>