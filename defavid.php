<?php

    if (!function_exists('http_response_code')) {
        function http_response_code($code = NULL) {

            if ($code !== NULL) {

                switch ($code) {
                    case 100: $text = 'Continue'; break;
                    case 101: $text = 'Switching Protocols'; break;
                    case 200: $text = 'OK'; break;
                    case 201: $text = 'Created'; break;
                    case 202: $text = 'Accepted'; break;
                    case 203: $text = 'Non-Authoritative Information'; break;
                    case 204: $text = 'No Content'; break;
                    case 205: $text = 'Reset Content'; break;
                    case 206: $text = 'Partial Content'; break;
                    case 300: $text = 'Multiple Choices'; break;
                    case 301: $text = 'Moved Permanently'; break;
                    case 302: $text = 'Moved Temporarily'; break;
                    case 303: $text = 'See Other'; break;
                    case 304: $text = 'Not Modified'; break;
                    case 305: $text = 'Use Proxy'; break;
                    case 400: $text = 'Bad Request'; break;
                    case 401: $text = 'Unauthorized'; break;
                    case 402: $text = 'Payment Required'; break;
                    case 403: $text = 'Forbidden'; break;
                    case 404: $text = 'Not Found'; break;
                    case 405: $text = 'Method Not Allowed'; break;
                    case 406: $text = 'Not Acceptable'; break;
                    case 407: $text = 'Proxy Authentication Required'; break;
                    case 408: $text = 'Request Time-out'; break;
                    case 409: $text = 'Conflict'; break;
                    case 410: $text = 'Gone'; break;
                    case 411: $text = 'Length Required'; break;
                    case 412: $text = 'Precondition Failed'; break;
                    case 413: $text = 'Request Entity Too Large'; break;
                    case 414: $text = 'Request-URI Too Large'; break;
                    case 415: $text = 'Unsupported Media Type'; break;
                    case 500: $text = 'Internal Server Error'; break;
                    case 501: $text = 'Not Implemented'; break;
                    case 502: $text = 'Bad Gateway'; break;
                    case 503: $text = 'Service Unavailable'; break;
                    case 504: $text = 'Gateway Time-out'; break;
                    case 505: $text = 'HTTP Version not supported'; break;
                    default:
                        exit('Unknown http status code "' . htmlentities($code) . '"');
                    break;
                }

                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                header($protocol . ' ' . $code . ' ' . $text);

                $GLOBALS['http_response_code'] = $code;

            } else {

                $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

            }

            return $code;

        }
    }

ob_start();
if(session_id() == ''){
     session_start(); 
}
$md5defa = md5('Defa');
$t = (int)$_GET['defat'];
$filedefa = str_replace($md5defa,'',$_SESSION['file'.$t]);
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

$header = http_response_code();
$header2 = getallheaders();
if($header==200&&$header2['Accept']!=""&&isset($_SERVER['HTTP_RANGE'])){

$_SESSION['x'.$defa.$t] = $_SESSION['x'.$defa.$t] + 1;
//Written By Juthawong Naisanguansee at Ampare Engine
if(isset($_SERVER['HTTP_RANGE'])){

$opts['http']['header']="Range: ".$_SERVER['HTTP_RANGE'];
}
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
