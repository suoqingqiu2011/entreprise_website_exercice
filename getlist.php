<?php

include_once("config/config.php");

if($_SESSION['lang']==''){
	$_SESSION['lang']= 'fr';	
}
include('lang/'.$_SESSION['lang'].'.php');
	
$element_option=$_GET["element_option"];
$element_option1=$_GET["element_option1"];
$element_option2=$_GET["element_option2"];

$s_info=$_COOKIE["chercheinfo"];
$p_info=$_COOKIE["pays"];
$d_info=$_COOKIE["domain"];

/*
echo $element_option."<br/>";
echo $element_option1."<br/>";
echo $element_option2."<br/>";
*/
echo "<div style='font-size:16px; text-decoration: underline; margin:5px;'><strong>".mot_cle." : ".$s_info."</strong></div><br/>"; 
//echo "search info: ".$s_info."<br/>";
//echo "pays info: ".$p_info."<br/>";
//echo "domain info: ".$d_info."<br/>";


if($element_option1== "Tous les Pays"){
	if($element_option2 == "Tous les Domaines"){
		//echo "case 1";
		$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%'" ;
		
		if($element_option== "1" ){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
		}if($element_option== "2" ){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
		}
		//echo "<br/>".$sql;
	}else if($element_option2 != "Tous les Domaines"){
		//echo "case 2";
		if($d_info=="Tous les Domaines"){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%'";
			if($element_option== "1" ){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
			}if($element_option== "2" ){
				$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
			}
		}else{
			$sql="SELECT * FROM $tb_ListPartner where `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%'";
			if($element_option== "1" ){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
			}if($element_option== "2" ){
				$sql="SELECT * FROM $tb_ListPartner where `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
			}
		}
		
		//echo "<br/>".$sql;
	}
}else if($element_option1!= "Tous les Pays" ){
	if($element_option2 == "Tous les Domaines"){
		//echo "case 3";
		if($p_info!="Tous les Pays" ){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerName` like '%".$s_info."%'";
			if($element_option== "1" ){
				$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
			}if($element_option== "2" ){
				$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
			}
		}else{
			$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%'" ;
			if($element_option== "1" ){
			$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
			}if($element_option== "2" ){
				$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
			}
		}
		//echo "<br/>".$sql;
	}else if($element_option2 != "Tous les Domaines"){
			//echo "case 4";
			if($d_info!="Tous les Domaines"){
				if($p_info == "Tous les Pays"){
					$sql="SELECT * FROM $tb_ListPartner where `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%'";
					if($element_option== "1" ){
					$sql="SELECT * FROM $tb_ListPartner where `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
					}if($element_option== "2" ){
						$sql="SELECT * FROM $tb_ListPartner where `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
					}
					//echo " here 78";
				}else{
					$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%'";
					if($element_option== "1" ){
					$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
					}if($element_option== "2" ){
						$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerType` like '%".$d_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
					}
					//echo " here 86";
				}
			}else{
				if($p_info == "Tous les Pays"){
					$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%'";
					if($element_option== "1" ){
					$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
					}if($element_option== "2" ){
						$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
					}
					//echo " here 97";
				}else{
					$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerName` like '%".$s_info."%'";
					if($element_option== "1" ){
					$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
					}if($element_option== "2" ){
						$sql="SELECT * FROM $tb_ListPartner where `PartnerRegion` like '%".$p_info."%' && `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
					}
					//echo " here 105";
				}						
			}		
			//echo "<br/>".$sql;
		}
	
	
}



//************************ 如果要删除 按国家 和 行业领域 分类的部分 ， 用此处注释代码 **************************
/*
if($element_option== "0" ){
	$sql="SELECT * FROM $tb_ListPartner ";
}else if($element_option== "1" ){
	$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` asc";
}else if($element_option== "2" ){
	$sql="SELECT * FROM $tb_ListPartner where `PartnerName` like '%".$s_info."%' Order by `PartnerName` desc";
}
*/

$result = mysql_query($sql)OR die (mysql_error());

 echo "<ul align='left' >";
while($myrowPartner = mysql_fetch_array($result)){
	
 echo "<li align='left' >";
 echo "<img class='icon_partner' src=".$myrowPartner[PartnerImgPath]." /> ";
 echo "<a align='left'  href=".$myrowPartner[PartnerSite]." target='_blank'>";
 echo "<span align='left' >".$myrowPartner[PartnerName]."</span></a><br/><br/>";
 echo "<span class='contact_num' style='font-size:8px;'>".Contact." : ".$myrowPartner[PartnerNumTel]."<br/></span>";
 echo "<span class='contact_num' style='font-size:8px;'>".Pays." : ".$myrowPartner[PartnerRegion]."<br/></span>";
 echo "<span class='contact_num' style='font-size:8px;'>".Domaine." : ".$myrowPartner[PartnerType]."<br/></span>";
 echo "<img class='icon_soc' src='images/conseil.jpg'/>";
 echo "</li>";
 }
 echo "</ul>";
?>