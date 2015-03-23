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
$window = md5(time());
$_SESSION['window'] = $window;
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<script>
$.ajax({
  type: "POST",
  url: "<?php echo $plugin_url;?>enable.php",
});
</script>
  <?php
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
$defa= plugin_dir_url($file);
$defa = wp_make_link_relative($defa);
$_SESSION['x'.$matches['2'].$_SESSION['defat']]=0;
$_SESSION['defa'.$matches['2'].$_SESSION['defat']] = md5(time()."Defa Protector");
$_SESSION['imdefa'.$_SESSION['defat']]=md5('Defa').base64_encode(base64_encode($matches['2']));
$_SESSION['x'.$matches['2']]=0;
$_SESSION['defa'.$matches['2']] = md5(time()."Defa Protector");
$_SESSION['file'.$_SESSION['defat']] = md5('Defa').base64_encode(base64_encode($matches['2']));
  return $matches[1] . $rootURL .$defa . "defavid.php?window=".$_SESSION['window']."&defat=".$_SESSION['defat'];
}

$mes = preg_replace_callback("/(<video[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $out2);


$mes = preg_replace_callback("/(<source[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);

$mes = preg_replace_callback("/(<audio[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
echo $mes;
}else{
echo $out2;
}
?>
