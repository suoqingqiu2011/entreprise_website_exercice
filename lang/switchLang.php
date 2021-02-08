<?
session_start();
$_SESSION['lang']=$newLang;

$adresse=$_SERVER['HTTP_REFERER'];
header("location:".$adresse);
?>