<?php

include_once("config/config.php");

if($_SESSION['lang']==''){
	$_SESSION['lang']= 'fr';	
}
include('lang/'.$_SESSION['lang'].'.php');
	
$element_op=$_GET["element_op"];
$element_op1=$_GET["element_op1"];

$s_infopers=$_COOKIE["cherchepers"];
$p_infopers=$_COOKIE["poste"];



echo $element_op."<br/>";
echo $element_op1."<br/>";


echo "<div style='font-size:16px; text-decoration: underline; margin:5px;'><strong>".mot_cle." : ".$s_infopers."</strong></div><br/>"; 
echo "search info: ".$s_infopers."<br/>";
echo "poste info: ".$p_infopers."<br/>";

if($element_op1== "Tous les Domaines"){
		echo "case 1"; 
		$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_infopers."%'" ;
		
		if($element_op== "1" ){
			$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_infopers."%' Order by `EmployeName` asc";
		}if($element_op== "2" ){
			$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_infopers."%' Order by `EmployeName` desc";
		}
		echo "<br/>".$sql;
	
}else if($element_op1!= "Tous les Domaines"){	
		if($p_infopers=="Tous les Domaines"){
			echo "case 2"; 
			$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_infopers."%'" ;
			
			if($element_op== "1" ){
				$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_infopers."%' Order by `EmployeName` asc";
			}if($element_op== "2" ){
				$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_infopers."%' Order by `EmployeName` desc";
			}
		}else{
			echo "case 3"; 
			$sql="SELECT * FROM $tb_listemployes where `EmployePoste` like '%".$p_infopers."%' && `EmployeName` like '%".$s_infopers."%'" ;
			
			if($element_op== "1" ){
				$sql="SELECT * FROM $tb_listemployes where `EmployePoste` like '%".$p_infopers."%' && `EmployeName` like '%".$s_infopers."%' Order by `EmployeName` asc";
			}if($element_op== "2" ){
				$sql="SELECT * FROM $tb_listemployes where `EmployePoste` like '%".$p_infopers."%' && `EmployeName` like '%".$s_infopers."%' Order by `EmployeName` desc";
			}
		}
		echo "<br/>".$sql;
}


//************************ 如果要删除 按国家 和 行业领域 分类的部分 ， 用此处注释代码 **************************
/*
if($element_op== "0" ){
	$sql="SELECT * FROM $tb_listemployes ";
}else if($element_op== "1" ){
	$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_info."%' Order by `EmployeName` asc";
}else if($element_op== "2" ){
	$sql="SELECT * FROM $tb_listemployes where `EmployeName` like '%".$s_info."%' Order by `EmployeName` desc";
}
*/

 $result = mysql_query($sql)OR die (mysql_error());
 

 echo "<div style='width:700px; height:500px;'>";
 while($myrowEmploye = mysql_fetch_array($result)){
	
 echo "<div style='width:650px; height:280px; margin-left:20px; border-bottom:3px #999999 solid;'>";
	 echo "<img class='icon_employe' src=".$myrowEmploye[EmployeImgPath2]." style='margin:30px; margin-right:0; width:380px; height:180px;'/>"; 
		echo "<div style='float:right; margin:30px; margin-left:0; margin-right:30px;'>";
				echo "<span class='.nom_emp1.' align='left' style='padding:5px 20px; font-size:20px;'><strong>".$myrowEmploye[EmployeName]."</strong></span><br/><br/>";
				echo "<span class='contact_num' style='font-size:8px;'>".Poste.":".$myrowEmploye[EmployePoste]."<br/></span>";
				echo "<span class='contact_num' style='font-size:8px;'>".Tel.":".$myrowEmploye[EmployeNumTel]."<br/></span>";
				echo "<span class='contact_num' style='font-size:8px;'>".Email.":".$myrowEmploye[EmployeMail]."<br/></span>";
		echo "</div>";
 echo "</div>";
 echo "<div style='margin:30px; margin-top:20px;'>";
	echo "<span class='contact_num' style='font-size:8px; '>".$myrowEmploye[EmployeIntro]."<br/></span>";
 echo "</div>";
				
 }
 echo "</div>";

?>