<?
session_start();

$db_server="localhost";
$db_user="root";
$db_password="systatest";
$systa_db="systaconseilliu";

$tb_newsscrolling = "newsscrolling";
$tb_ListPartner = "ListPartner";
$tb_listmessage = "listmessage";
$tb_listemployes = "listemployes";

$connect=mysql_pconnect($db_server,$db_user,$db_password) or die(mysql_error()); 
mysql_query('SET NAMES "utf8"', $connect);
mysql_select_db($systa_db,$connect) or die('Could not connect: ' .mysql_error()); 

?>