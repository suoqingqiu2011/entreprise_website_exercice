<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title>图片滚动</title>
    <style>
    *{margin:0;padding:0;}
    ul{list-style:none;}
    img{border:0;}
    .scroll{width:358px;height:63px;}
    .scroll_left{width:23px;height:63px;background:url(images/arrows.png) #000 no-repeat;float:left;}
    .scroll_right{width:23px;height:63px;background:url(images/arrows.png) #000 left no-repeat; background-position: -36px 0; float:left;}
    .pic{width:312px;height:173px;float:left;}
    .pic ul{display:block;}
    .pic li{float:left;display:inline;width:104px;text-align:center;}
    </style>
</head>
<body>
<div style="margin:100px auto;width:358px;">
    <div class="scroll">
        <div class="scroll_left" id="LeftArr"></div>
        <div class="pic" id="scrollPic">
        <ul>
            <li><a href="#" target="_blank" title=""><img src="images/pic01.png" width="100" height="63" alt="" /></a></li>
            <li><a href="#" target="_blank" title=""><img src="images/pic02.jpg" width="100" height="63" alt="" /></a></li>
            <li><a href="#" target="_blank" title=""><img src="images/pic03.jpg" width="100" height="63" alt="" /></a></li>
            <li><a href="#" target="_blank" title=""><img src="images/pic04.jpg" width="100" height="63" alt="" /></a></li>
            <li><a href="#" target="_blank" title=""><img src="images/pic05.jpg" width="100" height="63" alt="" /></a></li>
            <li><a href="#" target="_blank" title=""><img src="images/pic06.jpg" width="100" height="63" alt="" /></a></li>
        </ul>
        </div>
        <div class="scroll_right" id="RightArr"></div>
    </div>
</div>
</body>
</html>
<script src="scrollPic.js"></script>
<script>
window.onload = function(){
    scrollPic();
}
function scrollPic() {
    var scrollPic = new ScrollPic();
    scrollPic.scrollContId   = "scrollPic"; //内容容器ID
    scrollPic.arrLeftId      = "LeftArr";//左箭头ID
    scrollPic.arrRightId     = "RightArr"; //右箭头ID

    scrollPic.frameWidth     = 312;//显示框宽度
    scrollPic.pageWidth      = 104; //翻页宽度

    scrollPic.speed          = 10; //移动速度(单位毫秒，越小越快)
    scrollPic.space          = 10; //每次移动像素(单位px，越大越快)
    scrollPic.autoPlay       = true; //自动播放
    scrollPic.autoPlayTime   = 3; //自动播放间隔时间(秒)

    scrollPic.initialize(); //初始化
}
</script>

<!DOCTYPE HTML> 
<html> 
<head> 
<meta charset="utf-8"> 
<meta name="description" content="this" /> 
<meta name="keywords" content="this" /> 
<title>this</title> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script> 
<style type="text/css"> 
body{margin:0;padding:0;} 
.hover{float:left;position:relative;margin:0 auto;padding:0; } 
.hv{position:absolute; left:0;top:0;display:none; } 
</style> 
<script type="text/javascript"> 
$(function() { 
$('.hover').hover( 
function (){ 
$('.hv').stop().fadeTo('slow',1); 
},function() { 
$('.hv').stop().fadeTo('slow',0); 
} 
) 
}) 
</script> 
</head> 

<body> 
<div class="hover"> 
<img src="http://img.vip.xunlei.com/img/banner/201303181424386268.jpg" alt="" width='100px' height='100px'> 
<img class="hv" src="http://www.baidu.com/img/shouye_b5486898c692066bd2cbaeda86d74448.gif" alt="" width='100px' height='100px'> 
</div> 
</body> 
</html> 


// 地图
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.com/?ie=UTF8&amp;ll=37.649034,106.435547&amp;spn=60.9435,113.203125&amp;z=3&amp;brcurrent=3,0x31508e64e5c642c1:0x951daa7c349f366f%3B5,0&amp;output=embed&amp;s=AARTsJpc4mpatoGsvXnyodj3MTFey1k7Lg"></iframe><br /><small><a href="http://ditu.google.com/?ie=UTF8&amp;ll=37.649034,106.435547&amp;spn=60.9435,113.203125&amp;z=3&amp;brcurrent=3,0x31508e64e5c642c1:0x951daa7c349f366f%3B5,0&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
// 钟表
<script src="http://www.gmodules.com/ig/ifr?url=http://www.matt.org/modules/GoogleClock.xml&amp;up_vsize=100px&amp;synd=open&amp;w=100&amp;h=100&amp;title=Google+Clock&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
// 数字时间
<script src="http://www.gmodules.com/ig/ifr?url=http://www.canbuffi.de/gadgets/clock/clock.xml&amp;up_title=Clock%20%26%20Date&amp;up_time_format=1&amp;up_seconds=1&amp;up_date_format=0&amp;up_dayofweek=1&amp;up_offset_hours=%2B8&amp;up_offset_minutes=&amp;up_daylight=0&amp;up_color=red&amp;synd=open&amp;w=260&amp;h=100&amp;title=&amp;lang=en&amp;country=ALL&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
// 天气预报
<script src="http://www.gmodules.com/ig/ifr?url=http://www.labpixies.com/campaigns/weather/weather.xml&amp;up_degree_unit_type=0&amp;up_first_load=1&amp;up_locations=0&amp;up_zip_code=0&amp;up_city_code=0&amp;up_disable_os=0&amp;synd=open&amp;w=300&amp;h=230&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
// 其他天气
<iframe src="http://www.thinkpage.cn/weather/weather.aspx?c=CHXX0013&l=zh-CN&x=1&d=4&m=1&s=1&t=0&fc=0" frameborder="0" scrolling="no" width="160" height="250" allowTransparency="true"></iframe>
// 网络标准时间，非本机时间
<iframe src="http://time.org.cn/clock/#color:000000;font-size:11pt" width=250 height=60 frameborder=0 scrolling=no allowTransparency=true></iframe>
// 根据IP自动识别地理位置的天气
<iframe src="http://weather.265.com/weather.htm" width="168" height="50" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" name="265"></iframe>

<iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市新生南路三段90號&z=10&output=embed&t=></iframe>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 基本的按钮下拉菜单</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		默认 <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><a href="#">功能</a></li>
		<li><a href="#">另一个功能</a></li>
		<li><a href="#">其他</a></li>
		<li class="divider"></li>
		<li><a href="#">分离的链接</a></li>
	</ul>
</div>

</body>
</html>


<script>
		function selectOnchang(obj){ 
		//获取被选中的option标签选项 
		alert(obj.selectedIndex);
		}

</script>

<div class="page-header">
	<div class="form-horizontal">
	<div class="control-label col-lg-0">
	</div>
	<div class="col-lg-2">
	<select class="form-control" onchange="selectOnchang(this)">
	<option>所有申请商家</option>
	<option>待审核商家</option>
	<option>未通过审核商家</option>
	<option>已通过审核商家</option>
	</select>
	</div>
	</div>

</div>

<input type="button" value="先传给php在让php打印出来" id="btn"/>
<script>
    var btn=document.getElementById('btn');
    var a='123456';
    btn.onclick=function(){
        var ajax=new XMLHttpRequest();
        ajax.open('GET','a.php?use='+a,true)
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4){
            if(ajax.status==200){
                 
                alert(ajax.responseText);
                 
            }
            }
        }
         
        ajax.send();
    }
</script>

<meta charset="utf-8"> 
<div class="form-group">
     <label for="tag">标签</label>
     <select name="tag" value='{$result["tag"]}' class="form-control input-lg">
         <option value="shenghuomiaozhao" <?php echo ($result["tag"]=="shenghuomiaozhao")?"selected":"" ?>>生活妙招</option>
		<option value="fenleijieshao"    <?php echo ($result["tag"]=="fenleijieshao")?"selected":""?>    >分类介绍</option>
		<option value="huanbaohudong"    <?php echo ($result["tag"]=="huanbaohudong")?"selected":""?>    >环保互动</option>
		<option value="huishouliucheng"  <?php echo ($result["tag"]=="huishouliucheng")?"selected":""?>  >回收流程</option>
    </select>              
		<?php echo $result["tag"];?>
</div>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" dir="ltr">  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title>Online View PDF</title>  
<script type="text/javascript" src="http://sources.ikeepstudying.com/js/jquery-1.8.3.min.js"></script>  
<script type="text/javascript" src="jquery.media.js"></script>  
<script type="text/javascript">  
    $(function() {  
        $('a.media').media({width:800, height:600});  
    });  
</script>  
</head>  
   
<body>  
<a class="media" href="file/uvsq.pdf">PDF File</a>  
</body>  
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>html 最简遮罩层</title>  
<script type="text/javascript">  
function showDiv(){  
    document.getElementById('popDiv').style.display='block';  
    //document.getElementById('bg').style.display='block';  
	document.getElementById('partie_text').innerHTML = document.getElementById('txt').value;
}  
function closeDiv(){  
    document.getElementById('popDiv').style.display='none';  
    document.getElementById('bg').style.display='none';  
}  
/*
document.getElementById('btn').onclick = function(){
    var myWindow = window.open();
    myWindow.document.body.innerHTML = document.getElementById('txt').value;
};*/
</script>  
</head>  
<body>  
<div id="bg" style="display:none;background-color: #ccc;width: 100%;position:absolute;height: 100%;opacity: 0.5;z-index: 1;"></div>  



<div style="padding-top: 10%;padding-left:40%;z-index:1;">  
	<form>
		<input type="textbox" id="txt" />
		<input type="button" id="btn" value="Open window" onclick="showDiv();"/>
		<a class="open_popup" name="" href="javascript:showDiv();" /> 打开遮罩层 </a>
	</form>
	

	<div align="center" id="popDiv" style="z-index:99;display:none;position:absolute; margin-left:100px; margin-bottom:10px; background-color: #FFF;">
		 
		<a align="center" href="javascript:closeDiv()">关闭遮罩层</a> 
		<div id="partie_text1" align="center" style="width:400px; height:300px;" scroll="no" >
			<p id="partie_text2"></p>
		</div>
	</div>  

</div>  
</body>  
</html>
-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<script type="text/javascript">

function changeText(str){
	document.getElementById('boldStuff').style.display='block'; 
	document.getElementById('bg').style.display='block'; 
	//document.getElementById('boldStuff1').innerHTML = document.getElementById('txt').value;
	document.getElementById('boldStuff2').innerHTML = document.getElementById('txt' + str).innerHTML;
}

function closeDiv(){  
    document.getElementById('boldStuff').style.display='none';  
    document.getElementById('bg').style.display='none';  
	//document.getElementById('boldStuff1').innerHTML = '';
	document.getElementById('boldStuff2').innerHTML = '';
}  

</script>

<div id="bg" style="display:none; background-color:#ccc; width: 100%; position:absolute; height:100%; opacity: 0.5; z-index: 1;"></div> 

<div style="padding-top: 10%;padding-left:40%;">
<? 	$i=0;
	while($i<=3){?>  
	<input type="textbox" id="txt" /><br/>
	<span id="<? print 'txt'.$i;?>" class="" value="asdasd asdasd"><? echo "woshi".$i;?></span><br/>
	<input type='button' onclick='javascript:changeText(this.name);' name='<? print $i;?>' value="click" style="border:none; background:none;"/><br/>
<? $i++; 
} ?>
</div>


<div id='boldStuff' style="width:400px; height:300px;display:none;z-index:99;display:none;position:absolute;margin-left:200px; margin-bottom:10px; background-color: #FFF;">
	<a align="center" href="javascript:closeDiv()" style="position:absolute;">关闭遮罩层</a> 
	<div id='boldStuff1' style="margin:50px; top:20px;"></div>
	<div id='boldStuff2' style="margin:60px; top:25px;"></div>
</div>
