<?php

ob_start();
session_start();
$md5defa = md5('Defa');
$t = (int)$_GET['defat'];

$filedefa = str_replace($md5defa,'',$_REQUEST['im']);
$file = base64_decode(base64_decode($filedefa));
$defa = base64_decode(base64_decode($filedefa));
$defaurl = get_headers($file, 1);
$url = $defaurl["Location"];
if($url!=$file&&$url!=""){
$file = $url;
}
 $msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
  $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
  $browser = strpos($_SERVER["HTTP_USER_AGENT"], 'Trident/7.0') ? true : false;
  $safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
  $chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
  $opera = strpos($_SERVER["HTTP_USER_AGENT"], 'Opera') ? true : false;
function isMobile() {
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $ua);
}

if( isset($_SERVER['HTTP_RANGE'])||$_SESSION['x'.$defa.$t]==0&&$browser||$_SESSION['x'.$defa.$t]==0&&$msie||$_SESSION['x'.$defa.$t]==0&&isMobile()||$_SESSION['x'.$defa.$t]==0&&$mobilei){

$_SESSION['x'.$defa.$t] = $_SESSION['x'.$defa.$t] + 1;
//Written By Juthawong Naisanguansee at Ampare Engine
$opts['http']['header']="Range: ".$_SERVER['HTTP_RANGE'];

$opts['http']['method']= "HEAD";

$conh=stream_context_create($opts);

$opts['http']['method']= "GET";

$cong= stream_context_create($opts);

$out[]= file_get_contents($file,false,$conh);

$out[]= $http_response_header;

ob_end_clean();

array_map("header",$http_response_header);

readfile($file,false,$cong);
die();
}
?>
