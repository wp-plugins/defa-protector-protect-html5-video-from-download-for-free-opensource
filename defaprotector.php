<?php
/*
Plugin Name: Defa Protector Platinum
Plugin URI: http://ww2.juthawong.com/defaprotector
Description: Protect your video from being downloaded or stolen
Version: 6.3.5
Author: Juthawong Naisanguansee
Author URI: http://www.juthawong.com/
License: GPL
*/
add_action('wp_head','defago');
add_action('wp_footer', 'defaset');
add_action('admin_menu', 'defadmin_actions');
function defa_admin() {
?>
<style>
html{

    line-height: 300%;
}
h1{
text-align:center;
padding:20px;
}
h2{
text-align:center;
padding:20px;
}

h3{
text-align:center;
padding:20px;
}
p{
padding:10px;
}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21366715-5', 'auto');
  ga('send', 'pageview');

</script>

  <h1>Welcome to Defa Protector FAQ and Help</h1>
<h2 style="color:red">Important : Wordpress Built-In Player can bring to download leaked in view source link.<br><br> Please use <a href="https://wordpress.org/plugins/secure-html5-video-player/">Secure HTML5 Video Player Plugin Free on Wordpress Market</a> Instead</h1>
<h3>Questions ? : Please Read Our Defa Protector FAQ :<br> <a href="http://www.juthawong.com/defa-protector-faq/">https://www.juthawong.com/defa-protector-faq/</a></h3><p>
This Software Works on Defa Range Theory</p><br>
<p>If you like our software . Please Donate us . We earn very little and work hard to give you the best quality software for free<br>
Donate us : <a href="http://www.juthawong.com/donate">Donate</a></p>
<p>or Use Our Commercial Award</p><br>
<p>&lt;iframe style=&quot;width:100%;height:auto;&quot; src=&quot;http://juthawong.com/commercialaward.php&quot;&gt;&lt;/iframe&gt;</p>
<p>
Common Problems : 
Video doesn't play. It coming from 2 problems. 1. Server Configuration 2.Bad Installation
<br>
1.Server Configuration. It is complicated but normally default lampp,xampp, mampp and wampp are works <br>
Requirement Function : http_response_code , get_headers() , header , $_SERVER and HTTP_RANGE<br>
Try look at all php files and view error code which given which function is not yet install or not working<br><br>

2.Bad Installation.<br>
Try Backup .htaccess and delete . Usually for Security Wordpress plugin that stop wordpress from accessing enable.php and defavid.php which cause error.<br>
Try access defavid.php and enable.php that it can be accessible or not.<br><br>

Usually defavid.php comes with 1 error about filename which you can ignore and enable.php by default and working will show nothing.
<br>
Hope This Help
</p>
<p>Latest Upgrade :
Fix SSL Error Problem</p>
<div>
Our Advertiser<br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6244029171510063"
     data-ad-slot="4983961519"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php
}

function defadmin_actions() {

    $page_title = 'Defa Protector Engine FAQ and Help';
    $menu_title = 'Defa Protector Engine Help';
    $capability = 'manage_options';
    $menu_slug  = 'defaprotector-info';
    $function   = 'defa_admin';
    $icon_url   = 'dashicons-media-code';
    $position   = 4;

    add_menu_page( $page_title,
        $menu_title,
        $capability,
        $menu_slug,
        $function,
        $icon_url,
        $position );
}


function defago()
{
include( plugin_dir_path( __FILE__ ) . 'includetop.php');

}
function defaset()
{

include( plugin_dir_path( __FILE__ ) . 'includebottom.php');
}



?>
