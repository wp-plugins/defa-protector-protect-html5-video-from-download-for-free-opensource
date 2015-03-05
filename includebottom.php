<?php
//Written By Juthawong Naisanguansee
if(session_id() == ''){
     session_start(); 
}
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }

$_SESSION['url'] = $pageURL;
$file = dirname(__FILE__) . '/defaprotector.php';
$plugin_url= plugin_dir_url($file);
$plugin_url = wp_make_link_relative($plugin_url);

$out2 = ob_get_clean();
if(strpos($out2,"<safe")==false){
?>
<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile()){?>
<script>
window.setInterval(function () {
 if(navigator.userAgent!="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>"){

document.body.innerHTML = "You spoof useragent";
window.stop();
   window.location = "http://<?php echo $plugin_url; ?>/nojavascript.php";
 }},1000);
</script>
<noscript>
    <meta HTTP-EQUIV="REFRESH" content="0; url=http://<?php echo $plugin_url; ?>/spoof.php"> 
</noscript>
<?php
}
if(strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE')||strpos($_SERVER["HTTP_USER_AGENT"], 'Trident/7.0')){

?>
<script>
var userAgent = userAgent || navigator.userAgent;
 if( userAgent.indexOf("MSIE ") > -1 || userAgent.indexOf("Trident/") > -1){

}else{
window.location.href="http://<?php echo $plugin_url; ?>/nojavascript.php";
exit();
}
</script>

<noscript>
  <meta http-equiv="refresh" content="900" />
    <META http-equiv="refresh" content="5;URL=http://<?php echo $plugin_url; ?>/nojavascript.php"> 

</noscript>
<?php
}
if(strpos($out2,"<safe")!==false){
$_SESSION['safe']="SAFE";
}
function getURL($matches) {
  global $rootURL;
if($_SESSION['defat']==""){
$_SESSION['defat'] = 1;
}else{
$_SESSION['defat'] = $_SESSION['defat'] + 1;
}
$file = dirname(__FILE__) . '/defaprotector.php';
$plugin_url= plugin_dir_url($file);
$plugin_url = wp_make_link_relative($plugin_url);
$_SESSION['x'.$matches['2'].$_SESSION['defat']]=0;
$_SESSION['defa'.$matches['2'].$_SESSION['defat']] = md5(time()."Defa Protector");
$_SESSION['imdefa'.$_SESSION['defat']]=md5('Defa').base64_encode(base64_encode($matches['2']));
$_SESSION['x'.$matches['2']]=0;
$_SESSION['defa'.$matches['2']] = md5(time()."Defa Protector");
$_SESSION['file'.$_SESSION['defat']] = md5('Defa').base64_encode(base64_encode($matches['2']));
  return $matches[1] . $rootURL . $plugin_url . "defavid.php?defat=".$_SESSION['defat'];
}

$mes = preg_replace_callback("/(<video[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $out2);


$mes = preg_replace_callback("/(<source[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);

$mes = preg_replace_callback("/(<audio[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
echo $mes;
}else{
echo $out2;
}
?>
