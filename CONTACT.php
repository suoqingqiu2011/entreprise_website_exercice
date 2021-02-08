<!-- Ecrit par BIN LIU 08/2017 -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
	session_start();
	
	include_once("config/config.php");
	if($_SESSION['lang']==''){
		$_SESSION['lang']= 'fr';	
	}
	include('lang/'.$_SESSION['lang'].'.php');
	
	if($envoye == envoyer){
		$sendtime=date("Y-m-d h:i:s");
		$sql="Insert into $tb_listmessage(`MessageName`,`MessageMail`,`MessageSujet`,`MessageText`,`MessageTime`) values('$name','$email','$sujet','$msg','$sendtime')";
		mysql_query($sql) or die(mysql_error());
	}
	
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
			#form_contact input{
				width:170px;
			}
	</style>
		
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbEJ826CbvSGwFTtO-KTWoowpdn3GxF50&sensor=true"></script>
	<script type="text/javascript">
		function check(){
			var TextVal1 = document.getElementById("name").value;        
			var TextVal2 = document.getElementById("email").value;            
			var TextVal3 = document.getElementById("sujet").value;        
			var TextVal4 = document.getElementById("msg").value;        
			
		　　var Regex = /^(?:\w+\.?)*\w+@(?:\w+\.)*\w+$/;            
		　　if (TextVal1 == "") {                    
		　　　　alert("请输入姓名！！");                    
				document.getElementById("email").focus();		
		　　	return false;
			}else if(TextVal2 == "") {                    
		　　　　alert("请输入电子邮件地址！！");                    
				document.getElementById("email").focus();		
		　　	return false;
		　　}else if (!Regex.test(TextVal2)){                
				alert("你输入的邮箱地址格式不正确，请重新输入 ！！！");                    
				document.getElementById("email").focus();                   
		　　	return false;
			}else if(TextVal3 == "") {                    
		　　　　alert("请输入标题！！");                    
				document.getElementById("email").focus();		
		　　	return false;
		　　}else if(TextVal4 == "") {                    
		　　　　alert("请输入发信内容！！");                    
				document.getElementById("email").focus();		
		　　	return false;
		　　}else {                    
				 return true;               
		　　}            
		}  
		
	</script>
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
			<div id="breadcrumb"><a href="#"><? echo Contact; ?></a> &gt; <a href="CONTACT.php"><? echo Coordonnees; ?></a> </div>
			<div id="page-title"><? echo Coordonnees; ?></div>
		</div>
	</div>
	<div id="contact-form" style="width:170px; float:left; margin-top:90px; font-size:5px;"> 	
				
				<form id="form_contact" name="form_contact" action="CONTACT.php" method="POST"  onSubmit="return check();" style="margin:5px; width:160px;" />
					<label align="center" style="font-family:italic; font-size:15px;"><strong><? echo avis;?></strong></label>
					<label for="name"><? echo nom;?><span> *</span></label>
					<input type="text" name="name" id="name" />
					<label for="email"><? echo e_mail;?><span> *</span></label>
					<input type="text" name="email" id="email" />
					<label for="sujet"><? echo Sujet;?> <span> *</span></label>
					<input type="text" name="sujet" id="sujet" />
					<label for="msg"><? echo Message;?><span> *</span></label>
					<div style="width:175px; height:90px; overflow-y: scroll;">
					<input type="text" name="msg" id="msg" style="height:90px;" /></div>
					<input type="submit" name="envoye" id="submit-button"  value="<? echo envoyer;?>" style="width:80px !important;" />
				
				</form>
			</div>
	
	<div class="container" style="width:1000px;">
		<div class="twelve columns left-content page content-fullwidth" style="width: 1000px !important; margin-left: 120px;">
			
			<div class="information-header"><h3><? echo info_coordonnee;?></h3><br/><h5 style="float:right; margin-top:-20px; color:#e1e1e1;"><? echo t_oublie_pas;?></h5></div>
			<div style="width:1000px; height:580px; padding-bottom:20px; border-bottom: 4px solid #f4f4f4; background:url(images/cityscape.png) #f5f5f5 repeat-x; background-position:bottom; background-size:69% 30%;">
				<div style="margin:20px; float:left; border:2px #12589e solid; padding:5px;">
				<iframe width="500" height="470" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&hl=<? echo $_SESSION['lang'];?>&geocode=&q=92+Rue+Balard,+75015+Paris&z=15&output=embed&t=p"></iframe>
				</div>
				<div style="margin-top:60px; margin-left:20px; float:left;">
				<ul>
					<li><strong><? echo Systa; ?></strong></li>
					<li><? echo Adresse;?>: 92 Rue Balard, 75015 Paris</li>
					<li><? echo Tel;?>: 01 45 54 33 68</li>
					<li><? echo Fax;?>: 01 45 54 33 68</li>
					<li><? echo e_mail;?>: jack.lang@systa.fr</li>
					<li><? echo Site_web;?>: www.systa.fr</li>
					<li><img src="images/systa.jpg" style="margin-top:40px; padding:8px; width:330px; height:200px; opacity: 0.8; border:4px #12589e solid; border-radius:25px;"/></li>
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