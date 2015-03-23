<?php
if(session_id() == ''){
     session_start(); 
}
$window = $_SESSION['window'];
$_SESSION['jsenable'.$window] = TRUE;
?>
