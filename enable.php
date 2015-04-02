<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(session_id() == ''){
     session_start(); 
}
$window = $_SESSION['window'];
$_SESSION['jsenable'.$window] = TRUE;
}
?>
