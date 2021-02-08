<!-- Ecrit par BIN LIU 08/2017 -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
	session_start();
	
	include_once("config/config.php");
	if($_SESSION['lang']==''){
		$_SESSION['lang']= 'fr';	
	}
	include('lang/'.$_SESSION['lang'].'.php');

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
			.detail_soc { margin:50px; width:990px; margin-left:39px; }
			
			.detail_soc li{ float:left; margin:10px; margin-top:20px; width:290px; height:370px; border:2px #DDD solid; border-top:4px #12589e solid; padding-top:20px;}
			.detail_soc h6{padding-top:30px; padding-bottom:20px; color:#333333;}
			.detail_soc li p{font-size:13px; font-family:italic; padding:5px; padding-left:15px; padding-right:15px;}
			.detail_soc li:hover{ box-shadow: 0px 9px 22px #12589e;}
	</style>
		
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbEJ826CbvSGwFTtO-KTWoowpdn3GxF50&sensor=true"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="to-top">

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
									<li class="li_affect"><a href="PARTNER.php"><? echo Cooperateur; ?></a></li>
									
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
			<div id="breadcrumb"><a href="#"><? echo Societe; ?></a> &gt; <a href="SOCIETE.php"><? echo Introduction;?></a> </div>
			<div id="page-title"><? echo Introduction;?></div>
		</div>
	</div>
	
	
	<div class="container" style="width:1000px; min-height:1500px;">
		<div class="twelve columns left-content page content-fullwidth" style="width: 1000px !important;height:1470px; ">
			
			<div class="information-header" style="border-bottom: 4px #DDD solid;"><h3><? echo info_soc;?></h3></div>
			<div style="width:1000px; height:1480px; padding-bottom:20px; border-bottom: 4px solid #DDD; ">
				<div style="height:290px; background:url(images/office_pers.jpg); opacity:0.9; ">
					<div class="text_soc" align="center" style="float:right; margin:30px; margin-right:150px; width:320px; height:260px; background:url(images/frame_gris1.jpg) no-repeat; background-size:100% 90%; font-style:italic; line-height:50px;">
					<ul ><? echo systa_conseil;?>
						<li align="left" >* <? echo systa_conseil_first;?></li>
						<li align="left" >* <? echo systa_conseil_second;?></li>
						<li align="left" >* <? echo systa_conseil_third;?></li>
						<li align="left" >* <? echo systa_conseil_fourth;?></li>
						<li align="left" >* <? echo systa_conseil_fifth;?></li>
					</div>
				</div>
				<div align="center" style="margin-top:20px;padding:30px; border-top: 4px #DDD solid; border-bottom: 4px #DDD solid;">
					<h5 style="color:#e1e1e1; text-shadow: 2px 2px #12589e,2px 2px #DDD;"><? echo best_soc;?></h5>
					<div align="left" style="margin-top:50px; width:800px;">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo intro_soc_first;?> </p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo intro_soc_second;?></p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo intro_soc_third;?></p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo intro_soc_fourth;?></p>
					</div>
				</div>
				<div>
					<h5 align="center" style="margin-top:30px; padding-bottom:30px; color:#e1e1e1; text-shadow: 2px 2px #12589e,2px 2px #DDD;"><? echo aide_soc;?></h5>
					<ul class="detail_soc">
						
						<li style="margin-left:0;"> 
							<div style="width:290px; height:30px; background:url(images/carnet1.png) no-repeat; background-size:130% 100%; margin-top:-60px; padding:0;"></div>
							<h6 align="center" ><? echo specialite;?></h6>
							<p><? echo specialite_first;?></p>
							<p><? echo specialite_second;?></p>
							<p><? echo specialite_third;?></p>
						</li>
						<li >
							<div style="width:290px; height:30px; background:url(images/carnet1.png) no-repeat; background-size:130% 100%; margin-top:-60px; padding:0;"></div>
							<h6 align="center" ><? echo offre;?></h6>
							<p><? echo offre_first;?></p>
							<p><? echo offre_second;?></p>
							<p><? echo offre_third;?></p>
							<p><? echo offre_fourth;?></p>
							<p><? echo offre_fifth;?></p>
						</li>
						<li style="margin-right:0;">
							<div style="width:290px; height:30px; background:url(images/carnet1.png) no-repeat; background-size:130% 100%; margin-top:-60px; padding:0;"></div>
							<h6 align="center" ><? echo interlocuteur;?></h6>
							<p><? echo interlocuteur_first;?></p>
							<p><? echo interlocuteur_second;?></p>
							<p><? echo interlocuteur_third;?></p>
							<p><? echo interlocuteur_fourth;?></p>
						</li>
					</ul>
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