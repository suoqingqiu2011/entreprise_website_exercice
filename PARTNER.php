<!-- Ecrit par BIN LIU 08/2017 -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
	session_start();
	
	include_once("config/config.php");
	if($_SESSION['lang']==''){
		$_SESSION['lang']= 'fr';	
	}
	include('lang/'.$_SESSION['lang'].'.php');
	
	setcookie("chercheinfo", $_POST[searchinfo] );
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="@my_coder"/>
	<title>Conseil</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/nivo-slider.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<script type="text/javascript" src="js/bxslider.js"></script>
	<script type="text/javascript" src="js/ztwitterfeed.js"></script>
	<script type="text/javascript" src="js/jflickrfeed.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/jqueryui.js"></script>

	<script type="text/javascript" src="js/select.js"></script><!--  Jquery AJAX 下拉框给列表传值 -->
	<link rel="stylesheet" type="text/css" href="css/style0.css" /><!-- 除了首页 其他页面加 -->
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	
	<link rel="shortcut icon" href="favicon.ico" />

	
	<style type="text/css">
		header{
			height:50px
		}		
		.text_soc{padding-top:8px; }
		.text_soc li{
			font-size:5px; 
			padding-left:18px;
		}
		.search-icon{
		background:url(images/agrandiseur.jpg) no-repeat;
		background-size:100%;
		width:25px;
		height: 25px;
		display:block;
		float: left;
		position: absolute;
		left: 2px;
		top: 6px;
        }
		.select-icon{
		background:url(images/earth.png) no-repeat;
		background-size:100%;
		width:15px;
		height: 15px;
		display:block;
		float: left;
		margin:3px;
		position: absolute;
		left: 2px;
		top: 5px;
		opacity:0.8;
        }
		.select-icon1{
		background:url(images/soc.png) no-repeat;
		background-size:100%;
		width:15px;
		height: 15px;
		display:block;
		float: left;
		margin:3px;
		position: absolute;
		left: 2px;
		top: 5px;
		opacity:0.7;
        }
        .before{
            font-size:0.875em;
            padding:.3em 2em .3em;
            border:2px solid rgb(241,202,126);
            width: 240px;
            height: 33px;
        }
        .after{
            font-size:0.875em;
            padding:.3em 2em .3em;
            border:1px solid #26acf1;
            width: 240px;
            height: 33px;
        }
        .btn{
            border: none;
            position:absolute;
            left: 212px;
            height: 33px;
            width: 38px;
            display:inline-block;
            padding:.3em .5em .3em;
            font-family:"Avenir LT W01 65 Medium", Arial, Helvetica, sans-serif;
            color:#4997d2;
            background: #fff;
        }
        .btn:hover{
            cursor:pointer;
            background-color:#4997d2;
            color:#fff;
        }
		.list_partner{margin:30px; margin-top:120px; border-top:3px #999999 solid; border-bottom:3px #999999 solid;}
		.list_partner ul li{
			margin:20px;
			padding-top:20px;
			width:600px;
			height:160px;
			border-bottom:3px #DDD solid;
			position:relative;
		}
		.list_partner ul li:hover{
			background:#c8e3fd;
			margin-left:21px;
		}
		.icon_partner{float:left; width:150px; height:100px; opacity:0.8; margin:10px; margin-right:30px;}
		
		.icon_soc{  position:absolute; right:5px; bottom:5px; margin-bottom:10px; width:100px; height:60px; opacity:0.8; }
	</style>
		
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbEJ826CbvSGwFTtO-KTWoowpdn3GxF50&sensor=true"></script>
	<script src="../jquery-1.8.3.js"></script>
    <script>
	
		function actualiser(){
			document.cookie="chercheinfo=";
			document.cookie="pays=";
			document.cookie="domain=";
			
		};
	
        function showBefore(){
            $("input#name").removeClass("after").addClass("before").val("");
            
        }
        function showAfter(){
            $("input#name").removeClass("before").addClass("after");
            
        }
		
		 function showBefore1(){
            $("#form_choix").removeClass("after").addClass("before");
            
        }
         function showAfter1(){
            $("#form_choix").removeClass("before").addClass("after");
            
        }
		function showBefore2(){
            $("#form_choix1").removeClass("after").addClass("before");
            
        }
         function showAfter2(){
            $("#form_choix1").removeClass("before").addClass("after");
            
        }
		
		function showBefore3(){
            $("#form_choix2").removeClass("after").addClass("before");
            
        }
         function showAfter3(){
            $("#form_choix2").removeClass("before").addClass("after");
            
        }
		
		/*function selectOnchang(obj){ 
		//获取被选中的option标签选项 
		//alert(obj.selectedIndex);
		alert($("#form_choix").attr("value"));
		}*/

		function Reset_parametre(){		
			var a = document.getElementById("form_choix");
			a.options[0].selected = true;
			var b = document.getElementById("form_choix1");
			b.options[0].selected = true;
			var c = document.getElementById("form_choix2");
			c.options[0].selected = true;	
			
			document.cookie="chercheinfo=";
			document.cookie="pays=";
			document.cookie="domain=";
			
			
			showUser($('#form_choix2 option:selected').val());
			
		}
		
		$(document).ready(function(){
			$("#form_choix").change(function(){
				
			var c = document.getElementById("form_choix2");
			c.options[0].selected = true;
				
			document.cookie="pays="+$('#form_choix').attr('value');
			showUser1($('#form_choix option:selected').val());
			
			
			
			});
		});
		$(document).ready(function(){
			$("#form_choix1").change(function(){
			
			var c = document.getElementById("form_choix2");
			c.options[0].selected = true;
				
			document.cookie="domain="+$('#form_choix1').attr('value');
			showUser2($('#form_choix1 option:selected').val());
			
			
			
			});
		});
		
	

    </script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<!--<body id="to-top" onload="actualiser();"> -->
	<body id="to-top" >
	<header>
		<div id="header" class="main-header nav_fixed" >
			<div id="country" class="country" >
			<ul id="menu-header-menu" class="menu" style="float:left; width: 310px;">
				<li class="pays" style="padding-top:0px; "><? echo Pays; ?>
					<ul class="sub-menu"  style="top:-12px; width:220px">
						<li class="triangle" style="margin-left:-18px;" ><img src="images/triangle1.png" /></li><br/>
						<? 
						$repertoire="lang/";
						$dir=opendir($repertoire);
						while ($file = readdir($dir)) {
							if ($file!="." && $file!=".." && $file!="switchLang.php") {
							$tab_lang=explode(".",$file);					
						?>
						<li class="li_affect"><a href="lang/switchLang.php?newLang=<? echo $tab_lang[0]; ?>" >	
						<img src="images/<? echo $tab_lang[0]; ?>.png" style="height:10px; width:12px;">&nbsp;
						<? if($tab_lang[0]=="fr"){ echo "Français";} if($tab_lang[0]=="en"){ echo "English";} if($tab_lang[0]=="cn"){ echo "中文";} ?>
						</a></li>
						<?  	
							  }
							}  ?>	
					</ul>
				</li>
			
				<li class="pays" style="padding-top:0px;"><? echo Choix_actuel; ?>
					
					<? if($_SESSION['lang']=="fr") { ?> <img src="images/fr.png" style="height:10px; width:12px; padding-left:10px; padding-right:10px;"/> <?{ echo "fr";} } ?>
					<? if($_SESSION['lang']=="cn") { ?> <img src="images/cn.png" style="height:10px; width:12px; padding-left:10px; padding-right:10px;"/> <?  echo "中文"; } ?> 
					<? if($_SESSION['lang']=="en") { ?> <img src="images/en.png" style="height:10px; width:12px; padding-left:10px; padding-right:10px;"/> <? echo "English"; } ?> 
														
				</li>
			</ul>
			</div>
			
			<div id="container1" class="nav_top container" style=" width:900px; margin-top: -35px; margin-left:50px; height:50px;">
				<div class="two columns" id="logo-wrap">
					<a class="logo" href="HOME.php"><div id="logo" class="ch logo1" style="background-size:65%; height:48px;"></div></a>
									
				</div>
				<div class="fourteen columns ch1" style="margin-left:93px; margin-top: -10px; height: 50px;">
					<nav>
						<ul id="menu-header-menu" class="menu">
							<li class="icon-home" ><a href="HOME.php"><? echo Accueil; ?></a>
								
							</li>
							<li class="icon-company"><a href="#"><? echo Societe; ?></a>
								<ul class="sub-menu" style="top:-5px;">
									<li class="triangle"><img src="images/triangle1.png" /></li>
									<li class="li_affect"><a href="SOCIETE.php" ><? echo Introduction;?></a></li>
									<li class="li_affect"><a href="ORGANISME.php" ><? echo Organisme;?></a></li>
									<li class="li_affect"><a href="#" ><? echo Services;?></a></li>
									<li class="li_affect"><a href="#" ><? echo hist_succes;?></a></li>
			
			
								</ul>
							</li>
							<li class="icon-client" ><a href="#"><? echo Client_Group; ?></a>
								<ul class="sub-menu" style="top:-5px;">
									<li class="triangle"><img src="images/triangle1.png" /></li>
									<li class="li_affect"><a href="PARTNER.php" ><? echo Cooperateur; ?></a></li>
									
								</ul>
							</li>
							
							<li class="icon-contact"><a href="#"><? echo Contact; ?></a>
								<ul class="sub-menu" style="top:-5px;">
									<li class="triangle"><img src="images/triangle1.png" /></li>
									<li class="li_affect"><a href="CONTACT.php"><? echo Coordonnees; ?></a></li>
									
								</ul>
							</li>				
						</ul>				
					</nav>
				</div>
				<br class="clear" />
				
			</div>
		</div>
	</header>

	<div id="page-title-wrap">
		<div class="container">
			<div id="breadcrumb"><a href="#"><? echo Client_Group; ?></a> &gt; <a href="PARTNER.php"><? echo Cooperateur; ?></a> </div>
			<div id="page-title"><? echo Cooperateur; ?></div>
		</div>
	</div>
	
	
	<div class="container" style="width:1000px; margin-bottom:0;">
		<div class="twelve columns left-content page content-fullwidth" style="width: 1000px !important; ">
			
			<div class="information-header" style="border-bottom: 4px #DDD solid;"><h3><? echo info_client;?></h3></div>
			<div style="width:1000px; min-height:680px; padding-bottom:20px; ">
				<div style="height:290px; background:url(images/img_partner1.jpg); opacity:0.7; ">
					<div class="text_soc" id="text_soc" align="center" style="float:right; margin:30px; margin-right:50px; width:320px; height:260px; background:url(images/t_frame1.png) no-repeat; background-size:100% 90%; font-style:italic; line-height:50px;">
					<ul ><? echo systa_conseil;?>
						<li align="left" >* <? echo systa_conseil_first;?></li>
						<li align="left" >* <? echo systa_conseil_second;?></li>
						<li align="left" >* <? echo systa_conseil_third;?></li>
						<li align="left" >* <? echo systa_conseil_fourth;?></li>
						<li align="left" >* <? echo systa_conseil_fifth;?></li>
					</div>
				</div>
				
				<div id="header_box" style="float:left; margin-top:30px; width:255px; min-height:400px; border-bottom:2px #DDD solid; ">
					<div class="titre_search" style="margin-bottom:50px;"><span style="font-size:20px;"><? echo cherche_coop;?></span>
					<a style="float:right; font-size:5px; padding-top:20px; padding-right:15px; padding-bottom:8px;" href="javascript:Reset_parametre();" ><? echo Reset; ?></a></div>
					
					<form class="box" id="box_f0" name="form0" method="post" action="PARTNER.PHP#text_soc" style="position:relative; padding-bottom:30px; border-bottom:2px #DDD solid;">
						<span class="search-icon" ></span>
						<input class="before" id="searchinfo" type="search" name="searchinfo" placeholder="<? echo Search;?>" autocomplete="off" onFocus="showAfter()" onblur="showBefore()"/>
						
						<input type="submit" name="Submit0" class="btn" id="search" value="GO" style=" border: 2px solid rgb(241,202,126); display: inline-block; padding: .3em .5em .3em; font-family: 'Avenir LT W01 65 Medium', Arial, Helvetica, sans-serif; "/> 		
					</form>
					
					
					<div class="titre_search" style="margin-top:60px;"><span><? echo cherche_pays;?></span></div>
					<div class="box btn-group" style="position:relative;">
						<span class="select-icon"></span>		
							
						<select class="before form-control" id="form_choix"  name="tag" autocomplete="off" onFocus="showAfter1()" onblur="showBefore1()">
							
							<option value="Tous les Pays" ><? echo t_pays;?></option>
							<option value="FRANCE" ><? echo FRANCE;?></option>
							<option value="CHINE" ><? echo CHINE;?></option>
							<option value="US" ><? echo US;?></option>
							
						</select>
						
					</div>
					
					<div class="titre_search" style="margin-top:30px; "><span><? echo cherche_type;?></span></div>
					<div class="box btn-group" style="position:relative; border-bottom:2px #DDD solid; ">
						<span class="select-icon1" ></span>		
						<select class="before form-control" id="form_choix1"  name="q" autocomplete="off" onFocus="showAfter2()" onblur="showBefore2()">
						<option value="Tous les Domaines"><? echo t_domain;?> </option>
						<option value="INFORMATIQUE"><? echo INFORMATIQUE;?> </option>
						<option value="MANAGEMENT"><? echo MANAGEMENT;?></option>
						<option value="TOURISME"><? echo TOURISME;?></option>
						</select>			
					</div>	
					
					
					<div class="titre_search" style="margin-top:30px; margin-left:10px; width:200px;"><span style="font-size:1em; color:#4477B5; font-weight: bold; margin-bottom: 6px !important;"><? echo Devenir_partenaire ;?></span></div>
					<div class="box btn-group" style="position:relative; margin-top:30px; margin-left:10px; width:210px;">
						<p style="font-size:0.7em; "><? echo text_partenaire ;?></p>			
					</div>	
					<div align="right" style="width:200px;">
					<button id="contact-nous" onclick="javascript:window.location.href='CONTACT.php'" style="width:100px !important; "><? echo Contact_nous; ?></button>
					</div>
				</div>
				
				<div class="" style="float:right; margin-top:5px; width:700px; min-height:500px; background-color:#f4f4f4; position:relative;">
					<div style="margin:30px;">
						<div class="titre_search" style=" float:left;"><span><? echo result_search;?></span></div>
						
						<select class="before form-control" id="form_choix2" onchange="showUser(this.value)" name="q" autocomplete="off" onFocus="showAfter3()" onblur="showBefore3()" style=" float:right; font-size:12px; width:180px;">
							<option value="0"><? echo trie_facon;?></option>
							<option value="1"><? echo Titre_a_z;?></option>
							<option value="2"><? echo Titre_z_a;?></option>
						</select>
	
					</div>
					<div style="margin-top: 55px; position: absolute; left: 30px; font-size:5px;"><span><? echo str_attetion;?></span></div>
					<div class="list_partner" id="list_partner" align="left">
						<div style='font-size:16px; text-decoration: underline; margin:5px;'><strong><? echo mot_cle; echo " : ".$_POST[searchinfo];?></strong></div><br/>
						<ul align="left" >
							<?php 							
								$Partner_sql="select * from $tb_ListPartner where `PartnerCheck`= '1' order by `PartnerID`";	
								$Partner_result=mysql_query($Partner_sql)OR die (mysql_error());
							
								$Partner_sql1="select * from $tb_ListPartner where `PartnerCheck`= '1' && `PartnerName` like '%".$searchinfo."%' order by `PartnerID`";	
								$Partner_result1=mysql_query($Partner_sql1)OR die (mysql_error());
								
								
								if(!empty($_POST['Submit0'])) {
								   $result_choix = $Partner_result1;
									
								}else
									$result_choix = $Partner_result;
									
								while($myrowPartner=mysql_fetch_array($result_choix)){			
								?>
							<li align="left" >
								<img class="icon_partner" src="<?php print($myrowPartner[PartnerImgPath]);?>" /> 
								<a align="left"  href="<?php print($myrowPartner[PartnerSite]);?>" target="_blank">
								<span align="left" ><?php print($myrowPartner[PartnerName]);?></span></a><br/><br/>
								<span class="contact_num" style="font-size:8px;"><? echo Contact; ?> : <?php print($myrowPartner[PartnerNumTel]);?><br/></span>
								<span class="contact_num" style="font-size:8px;"><? echo Pays; ?> : <?php print($myrowPartner[PartnerRegion]);?><br/></span>
								<span class="contact_num" style="font-size:8px;"><? echo Domaine; ?> : <?php print($myrowPartner[PartnerType]);?><br/></span>
								<img class="icon_soc" src="images/conseil.jpg"/>
							</li>
							
							<?php 
							} 
							?>
						</ul>
					</div>
				</div>


			</div>
			
		</div>
	</div>

	
<footer>
		<div id="footer">
			<div class="container">
				<div >
					<ul class="foot_nav" style="float:left; color:#fff;">
							<li class="foot_nav_li" ><a href="HOME.php"><span><? echo Accueil; ?></span></a>
								
							</li>
							<li class="foot_nav_li"><a href="#"><span><? echo Societe; ?></span></a>
								<ul >
									<li align="left"><a href="SOCIETE.php" ><? echo Introduction;?></a></li>
									<li align="left"><a href="ORGANISME.php" ><? echo Organisme;?></a></li>
									<li align="left"><a href="#" ><? echo Services;?></a></li>
									<li align="left"><a href="#" ><? echo hist_succes;?></a></li>
			
								</ul>
							</li>
							<li class="foot_nav_li"><a href="#"><span><? echo Client_Group; ?></span></a>
								<ul >
									<li><a href="PARTNER.php" ><? echo Cooperateur; ?></a></li>
									
								</ul>
							</li>
							
							<li class="foot_nav_li"><a href="#"><span><? echo Contact; ?></span></a>
								<ul >
									<li><a href="CONTACT.php"><? echo Coordonnees; ?></a></li>
									
								</ul>
							</li>				
						</ul>	
							<a href="#to-top" id="back-to-top"></a>
				</div>
				<div class="sixteen columns" id="copyright-info">
					<div>&copy; 2017 All Rights Reserved - Created by LIU BIN</div>
					
				</div>
			</div>
		</div>
	</footer>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>