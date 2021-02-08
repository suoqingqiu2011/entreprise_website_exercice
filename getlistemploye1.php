<script>
		$(function(){
		   $("#list_employe li").hover(function(){
			  $(".detail",this).css({"color":"#ffffff"});	
			  $(".nom_emp",this).css({"color":"#ffffff","background-color":"#12589e"});
				
		   },function(){
			  $(".detail",this).css({"color":"#666666"});
			  $(".nom_emp",this).css({"color":"#666666","background-color":"#f4f4f4"});			  
		   })
		})
		
		function showDiv(str){  
			document.getElementById('popDiv').style.display='block';  
			document.getElementById('bg').style.display='block';  
			var img_src=document.getElementById('contact_img'+ str).src;
			document.getElementById('contactimg').innerHTML = "<img class='icon_employe' src='"+img_src+"' style='width:355px; height:210px;'/> ";
			document.getElementById('nomemp').innerHTML = document.getElementById('nom_emp' + str).innerHTML;
			document.getElementById('contactpost').innerHTML = document.getElementById('contact_post' + str).innerHTML;
			document.getElementById('contacttel').innerHTML = document.getElementById('contact_tel' + str).innerHTML;
			document.getElementById('contactmail').innerHTML = document.getElementById('contact_mail' + str).innerHTML;
			document.getElementById('contactintro').innerHTML = document.getElementById('contact_intro' + str).innerHTML;
			
		}  
		
		function closeDiv(str){  
			document.getElementById('popDiv').style.display='none';  
			document.getElementById('bg').style.display='none';  
			document.getElementById('nomemp').innerHTML='';
			document.getElementById('contactpost').innerHTML='';
			document.getElementById('contacttel').innerHTML='';
			document.getElementById('contactmail').innerHTML='';
			document.getElementById('contactintro').innerHTML = '';
			
		}  

    </script>


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
	$sql="SELECT * FROM $tb_ListPartner ";
}else if($element_op== "1" ){
	$sql="SELECT * FROM $tb_ListPartner where `EmployeName` like '%".$s_info."%' Order by `EmployeName` asc";
}else if($element_op== "2" ){
	$sql="SELECT * FROM $tb_ListPartner where `EmployeName` like '%".$s_info."%' Order by `EmployeName` desc";
}
*/

$result = mysql_query($sql)OR die (mysql_error());

 echo "<script>alert('123');</script>";
 echo "<script>
		
		$(function(){
		   $('#ul_employe li').hover(function(){
			  $('.detail',this).css({'color':'#ffffff'});	
			  $('.nom_emp',this).css({'color':'#ffffff','background-color':'#12589e'});
				
		   },function(){
			  $('.detail',this).css({'color':'#666666'});
			  $('.nom_emp',this).css({'color':'#666666','background-color':'#f4f4f4'});			  
		   })
		}); </script>";
		
	

 echo "<ul align='left' id='ul_employe'>";
 $i=0;
while($myrowEmploye = mysql_fetch_array($result)){
	
						
	echo "<li align='left' >";
	echo "<img class='icon_employe' src='".$myrowEmploye[EmployeImgPath1]." '/>"; 
	echo "<span class='nom_emp' align='left' style='padding:5px 20px;'>".$myrowEmploye[EmployeName]."</span><br/><br/>";
	echo "<span class='contact_num' style='font-size:8px;'>".Poste.":".$myrowEmploye[EmployePoste]."<br/></span>";
	echo "<span class='contact_num' style='font-size:8px;'>".Tel.":".$myrowEmploye[EmployeNumTel]."<br/></span>";
	echo "<span class='contact_num' style='font-size:8px;'>".Email.":".$myrowEmploye[EmployeMail]."<br/></span>";
		
	/*echo "<a class='' href='javascript:showDiv();'><span class='detail'>Detail</span></a>";*/
	echo "<input type='button' class='detail' onclick='javascript:showDiv(this.name);' name=".$i." value='Detail' style='border:none; background:none'>";
	
	$emp_ImgPath1[i]=$myrowEmploye[EmployeImgPath1];$emp_name[i]=$myrowEmploye[EmployeName];
	$emp_Poste[i]=$myrowEmploye[EmployePoste];$emp_NumTel[i]=$myrowEmploye[EmployeNumTel];$emp_Mail[i]=$myrowEmploye[EmployeMail];
	$emp_ImgPath2[i]=$myrowEmploye[EmployeImgPath2]; $emp_Intro[i]=$myrowEmploye[EmployeIntro]; 
														
								
	echo "</li>";

	echo $i++;
				
 }
 echo "</ul>";

?>