<?
session_start();

if (isset($_GET['session_name'])) {$_SESSION['show_name'] = $_GET['session_name'];}
?>