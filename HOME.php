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
	
	
	
	<link rel="stylesheet" type="text/css" href="css/font-face.css" />
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	
	<link rel="shortcut icon" href="favicon.ico" />

	</head>		
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		
		<style type="text/css">
		
			.main-header .fourteen {
				height: 86px;
				
			}
			#caption-text-wrap .header, #caption-text-wrap .text {
				background: url(images/bg_for_ie.png);
			}
			#menu-header-menu {
				margin-top:15px;
				margin-right:100px;
			}
			
			.main-header #newlogo1 img {
				left:940px;
				
			}
			.main-header #newlogo2 img  {
				left:1050px;
			}
			.main-header .newlogo img {
				position: absolute;
				top: 12px;
				z-index: 2;
			}
			.nav_fixed{
				background: #12589e;
				height:60px;
				padding-bottom:5px;
				box-shadow:0px 6px 25px #999999;
			}
			.nav_top{
				margin-top:10px;
			}
			.nav_top_des{
				padding-left:330px;
			}
			.ch{ 
				background-size:75%;
				border:1px sold #fff;
			}
			
			.ch1{
				background: url(../images/slider-bg.png);
				background-color: rgba(0, 0, 0, 0.2);
			}
			
			.country{
				background-color:#12589e; 
				height:36px;
				margin:0px;
				z-index:10;
			}
			.nav_c{
				display:none;
			}
			
			#menu-header-menu{
			 color:#fff;
			 float:left;
			 margin-top:15px;
			}
			.sub-menu li{
				vertical-align: middle;
			}
			.sub-menu .li_affect:hover{
				background-color:#6ca2d8;
				color:#ffffff;
				vertical-align: middle;
			}
			.sub-menu .flag{
				height:10px;
				width:12px;
				padding-right:10px;
			}
			
			#nouvelle{list-style:none;}
			@font-face {
                font-family: 'urow';
                src: url(iconfont.woff) format('woff');
            }
			.icon-home:before {
				content:"\f015";
			}
			
			.icon-company:before{
				content:"\f0f2";
			}
			
			.icon-client:before{
				content:"\f0e8";
			}
			
			.icon-contact:before{
				content:"\f098";
			}
			
			#blog-slider li{margin-left:39px; margin-right:39px;}
			
			#blog-slider li img{
				width:200px;
				height:200px;
				border:2px #000 solid;
				border-radius:35px;
				margin:5px;
			}
			
			.bord_img{
				width:225px; 
				height:225px; 
				border:4px #fff solid; 
				border-radius:25px;
			}
			
			.case_li {float:left; position:relative; top:0px; left:0px; overflow:hidden; border-left: 1px #fff solid; border-right: 1px #fff solid; marign:0 20px 0;}
			.case_li_txt{width:260px; height:120px; margin-left:5px; background:#ffffff; filter:alpha(opacity=80);-moz-opacity:0.8;opacity:0.8; top:128px; left:0px; position:absolute; overflow:hidden;}
			.case_li_txt_hover{width:200px; height:122px; margin-left:5px; background:#000000;filter:alpha(opacity=80);-moz-opacity:0.8;opacity:0.8; top:100px; left:0px; position:absolute; overflow:hidden;}
			.span_mr_txt{width:90%; text-align:left; margin:auto; padding:6px 0px; line-height:15px; color:#333333;}
			.span_font{width:90%; text-align:left; margin:auto; padding:6px 0px; line-height:15px; color:#ffffff;}
			.span_detail{width:90%; margin:auto; text-align:left; }
			.span_detail a{color:#c0c46d; text-decoration:underline;}
			.span_detail a:hover{color:#c0c46d; text-decoration:none;}

			.rollBox{width:1200px;height:260px;overflow:hidden; margin:0 auto;}
			.rollBox .LeftBotton{height:70px;width:21px; background:url(images/arrows.png) #999999 no-repeat 0px 5px;overflow:hidden;float:left;display:inline;margin:70px 50px 0;cursor:pointer;}
			.rollBox .RightBotton{height:70px;width:21px; background:url(images/arrows.png) #999999 no-repeat 0px 5px; background-position:-39px 0; overflow:hidden;float:left;display:inline;margin:70px 50px 0;cursor:pointer;}
			.rollBox .Cont{width:956px;overflow:hidden;float:left;}
			.rollBox .ScrCont{width:10000000px;}
			.rollBox .Cont .pic{width:312px;float:left;text-align:center;}
			.rollBox .Cont .pic img{padding:9px;background:#fff;border:1px solid #ccc;display:block;margin:0 auto;width:260px;height:190px;}
			.rollBox .Cont .pic div{color:#505050;margin:12px 26px 0px;}
			.rollBox .Cont .pic div span{display:block;}
			.rollBox .Cont a:link,.rollBox .Cont a:visited{color:#626466;text-decoration:none;}
			.rollBox .Cont a:hover{color:#f00;text-decoration:underline;}
			.rollBox #List1,.rollBox #List2{float:left;}

			
			.foot_nav .foot_nav_li{ float:left; height:80px; margin:20px 10px 20px; border-left:1px #fff solid; padding:0 15px 0; }	
			.foot_nav .foot_nav_li a{ color:#fff; }	
			.foot_nav .foot_nav_li span{ font-size:17px;}	
			.foot_nav .foot_nav_li ul{margin:20px 0 20px;}
			</style>

	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbEJ826CbvSGwFTtO-KTWoowpdn3GxF50&sensor=true"></script>
	<script>

		var nt = !1;
		$(window).bind("scroll",function() {
		var st = $(document).scrollTop();
		nt = nt ? nt: $("#container2").offset().top;
		
		var nav_head=$("#header");
		var nav_contenu = $("#container1");
		var nav_pays = $("#country");		
		var nav_pays2 = $(".pays");
		
		var nav_change= $("#logo");
		var nav_change1= $(".fourteen.columns");
		
		if (nt < st ) {
		nav_head.addClass("nav_fixed");
		nav_contenu.removeClass("nav_top").addClass("nav_top_des");
		
		nav_pays.removeClass("country");
		nav_pays2.addClass("nav_c");
		
		nav_change.addClass("ch");
		nav_change1.removeClass("ch1");
		
		
		} else {
		nav_head.removeClass("nav_fixed");				
		nav_contenu.addClass("nav_top").removeClass("nav_top_des");
		
		nav_pays.addClass("country");
		nav_pays2.removeClass("nav_c");
		
		nav_change.removeClass("ch");
		
		nav_change1.addClass("ch1");
	    
		}
		});
		
		
		function over_text(x){
			x.style.height="210px";
			x.style.width="210px";
		}
		function remove_text(x){
			x.style.height="200px";
			x.style.width="200px";
		}
		
		$(function(){
		   $("#blog-slider li").hover(function(){
			  $(".blog-slider-text-wrap",this).css({"color":"#12589e","text-shadow": "2px 2px #fff,2px 2px #DDD"});	 	       
		   },function(){
			  $(".blog-slider-text-wrap",this).css({"color":"#ffffff","text-shadow": "2px 2px #000,2px 2px #DDD"});		  
		   })
		})
		
</script>


<body id="to-top">

	<header>
		<div id="header" class="main-header">
			<div id="country" class="country" >
			<ul id="menu-header-menu" class="menu" style="margin-top:0px;">
				<li class="pays" style="padding-top:0px; "><? echo Pays; ?>
					<ul class="sub-menu"  style="top:-15px; width:220px">
						<li class="triangle" style="margin-left:-18px;" ><img src="images/triangle1.png" /></li><br/>
						<? 
						$repertoire="lang/";
						$dir=opendir($repertoire);
						while ($file = readdir($dir)) {
							if ($file!="." && $file!=".." && $file!="switchLang.php") {
							$tab_lang=explode(".",$file);					
						?>
						<li class="li_affect" ><a href="lang/switchLang.php?newLang=<? echo $tab_lang[0]; ?>" >	
						<img src="images/<? echo $tab_lang[0]; ?>.png" style="height:10px; width:12px;">&nbsp;
						<? if($tab_lang[0]=="fr"){ echo "Français";} if($tab_lang[0]=="en"){ echo "English";} if($tab_lang[0]=="cn"){ echo "中文";} ?>
						</a></li>
						<?  	
							  }
							}  ?>	
					</ul>
				</li>
			
				<li class="pays" style="padding-top:0px; width:200px; z-index:1"><? echo Choix_actuel; ?>
					
					<? if($_SESSION['lang']=="fr") { ?> <img src="images/fr.png" style="height:10px; width:12px; padding-left:10px; padding-right:10px;"/> <?{ echo "fr";} } ?>
					<? if($_SESSION['lang']=="cn") { ?> <img src="images/cn.png" style="height:10px; width:12px; padding-left:10px; padding-right:10px;"/> <?  echo "中文"; } ?> 
					<? if($_SESSION['lang']=="en") { ?> <img src="images/en.png" style="height:10px; width:12px; padding-left:10px; padding-right:10px;"/> <? echo "English"; } ?> 
									
				</li>
			</ul>
			</div>
			
			<div id="container1" class="nav_top container">
				<div class="two columns" id="logo-wrap">
					<a class="logo" href="HOME.php"><div id="logo" class="logo1"></div></a>
									
				</div>
				<div class="fourteen columns ch1">
					<nav>
						<ul id="menu-header-menu" class="menu">
							<li class="icon-home" ><a href="HOME.php"><? echo Accueil; ?></a>
								
							</li>
							<li class="icon-company"><a href="#"><? echo Societe; ?></a>
								<ul class="sub-menu">
									<li class="triangle"><img src="images/triangle.png" /></li>
									<li class="li_affect"><a href="SOCIETE.php" ><? echo Introduction;?></a></li>
									<li class="li_affect"><a href="ORGANISME.php" ><? echo Organisme;?></a></li>
									<li class="li_affect"><a href="#" ><? echo Services;?></a></li>
									<li class="li_affect"><a href="#" ><? echo hist_succes;?></a></li>
			
								</ul>
							</li>
							<li class="icon-client" ><a href="#"><? echo Client_Group; ?></a>
								<ul class="sub-menu">
									<li class="triangle"><img src="images/triangle.png" /></li>
									<li class="li_affect"><a href="PARTNER.php" ><? echo Cooperateur; ?></a></li>
									
								</ul>
							</li>
							
							<li class="icon-contact"><a href="#"><? echo Contact; ?></a>
								<ul class="sub-menu">
									<li class="triangle"><img src="images/triangle.png" /></li>
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
	
	<div id="slider-wrapper" class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">

			<img src="images/grp_img0.jpg"  alt="" title="#htmlcaption1" />
			<img src="images/grp_img2.jpg" alt="" title="#htmlcaption2" />
			<img src="images/grp_img3.jpg" alt="" title="#htmlcaption3" />
		</div>

	</div>
	<div id="htmlcaption1" class="nivo-html-caption">
		<div id="caption-text-wrap">
			<div class="header"><? echo text_bienvenu; ?></div>
			<div class="text"><? echo text_grp; ?> </div>
		</div>
	</div>
	<div id="htmlcaption2" class="nivo-html-caption">
		<div id="caption-text-wrap">
			<div class="header"><? echo text_res_pro; ?></div>
			<div class="text"><? echo text_serv; ?></div>
		</div>
	</div>
	<div id="htmlcaption3" class="nivo-html-caption">
		<div id="caption-text-wrap">
			<div class="header"><? echo text_strateg;?></div>
			<div class="text"><? echo text_conseil;?></div>
		</div>
	</div>
	
	<div id="container2" class="container" style=" width:1349px;">
		
		<br class="clear" />
			
		<div id="information-wrap" align="center">	
			
			<div class="intro" style="verflow: hidden;text-align: center;color: #3b485b; vertical-align: baseline; padding-bottom:80px; margin-bottom:20px; border-bottom: 4px solid #12589e; text-shadow: 1px 1px #000,1px 1px #DDD;">
				<h2 style="font-size: 28px;line-height: 100px;"><? echo t_systa;?></h2>
				
				<div class="news-text-wrap" >
					<div class="news-wrap" style="margin: 0 auto;">
						
						<div class="news-text" ><? echo intro_court_systa;?>  .....&nbsp; <a href="SOCIETE.php" class="more" ><strong><? echo More;?></strong></a> </div>		
						<div class="clear"></div></div>
				</div>
			</div>
			
			<div class="ten columns" id="ten" align="center" style="background:#12589e;  margin:0; width: 1349px; padding-top:0;">
			
			<a href="#ten">
			<div style="background:url(images/triangle_bas.png) no-repeat; margin-left:15px; height: 50px; width: 150px; background-size: 100% 90%;">
			</div></a>
				<div class="information-header" id="information-header1" style="padding-bottom:30px; padding-top: 30px; margin-bottom:30px; margin-left:40px;">
					<div style="color:#fff;" ><? echo Nouvelle;?></div>
				</div>
					
					<div class="rollBox">
					 <div class="LeftBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
					 <div class="Cont" id="ISL_Cont">
					  <div class="ScrCont">
					   <div id="List1">
					   
						<?php 							
								$news_sql="select * from $tb_newsscrolling where `NewsCheck`= '1' order by `NewsID`";	
								$news_result=mysql_query($news_sql)OR die (mysql_error());
								/*$row+=mysql_num_rows($news_result);

								while($row = mysql_fetch_row($news_result)){
									echo $row[0]; echo "&nbsp";
									echo $row[1]; echo "&nbsp";
									echo $row[2]; echo "&nbsp";
									echo $row[3]; echo "&nbsp";
									echo $row[4]; echo "&nbsp";
									echo $row[5]; echo "</br>";	
								}*/
								while($myrow=mysql_fetch_array($news_result)){			
								?>
								 <div class="pic case_li">
										  <img src="<?php print($myrow[NewsImgPath]);?>" />
										  <div class="case_li_txt">
											 <div class="span_mr_txt"><?php print($myrow[NewsTextDebut]);?>...</div>
											 <div class="span_detail"><a href="<?php print($myrow[NewsSite]);?>" onfocus="blur" target="_blank"> > detail</a></div>
										  </div>
								  </div> 
							  <?php 
								 }
							?>
						 
					   </div>
					   <div id="List2"></div>
					  </div>
					 </div>
					 <div class="RightBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
				   </div>
			</div>
		</div>
		

		
		<div id="from-blog-wrap">
			<div class="sixteen columns" id="from-blog" align="center" style="background-image:url(images/bg_feu_artifice2.png); background-zise:100%; background-repeat:no-repeat; background-attachment:fixed; padding-top:0; margin:0;margin-top:80px;  width:1349px; height:485px; border-radius:15px; ">
				<a href="#from-blog">
				<div style="background:url(images/triangle_bas1.png) no-repeat; margin-left:15px; height: 50px; width: 150px; background-size: 100% 90%;"></div></a>
				<div class="information-header" id="information-header2" style="padding-bottom:30px; margin-left:40px; margin:30px; color:#1252a0;" >
				<div><? echo t_trois_raisons;?></div> 
				</div>
				<ul id="blog-slider" style="margin-left:180px; padding-left:35px;">
					<li style="float:left;" >
						<div class="blog-slider-text-wrap" name="blog-text">
							<span class="slider-post-title"><? echo Organisme; ?></span>						
						</div>
						<div class="bord_img">
						<a href="ORGANISME.php" >
							<img name="img-part" src="images/organisme.jpg" onmouseover="over_text(this)" onmouseout="remove_text(this)"/>
							<div class="main-blog-magnifier"></div>
						</a>
						</div>
					</li>
					<li style="float:left;">
						<div class="blog-slider-text-wrap" name="blog-text">
							<span class="slider-post-title"><? echo Services;?></span>						
						</div>
						<div class="bord_img">
						<a href="#" >
							<img name="img-part" src="images/service.jpg" onmouseover="over_text(this)" onmouseout="remove_text(this)"/>
							<div class="main-blog-magnifier"></div>
						</a>	
						</div>
					</li>
					<li style="float:left;">
						<div class="blog-slider-text-wrap" name="blog-text">
							<span class="slider-post-title"><? echo hist_succes;?></span>
							
						</div>
						<div class="bord_img">
						<a href="#" >
							<img name="img-part" src="images/histoire.jpg" onmouseover="over_text(this)" onmouseout="remove_text(this)"/>
							<div class="main-blog-magnifier"></div>
						</a>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="divider-after"></div>
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
<script type="text/javascript" src="js/scroll_img.js"></script>
<script>
$(function(){
   $(".case_li").hover(function(){
      $(".case_li_txt",this).stop().animate({top:"80px"},{queue:false,duration:160});
	  $(".case_li_txt",this).css({"background-color":"#000000"});
	  $(".case_li_txt .span_mr_txt",this).attr("class","span_font");
   },function(){
      $(".case_li_txt",this).stop().animate({top:"128px"},{queue:false,duration:160});
	  $(".case_li_txt",this).css({"background-color":"#ffffff"});
	  $(".case_li_txt .span_font",this).attr("class","span_mr_txt");
   })
})
</script>

</html>