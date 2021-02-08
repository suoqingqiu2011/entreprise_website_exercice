
<?php
 header("Content-type: text/html; charset=utf-8"); 
 
 //数据库连接操作
 $conn = mysql_connect("localhost","root","systatest") or die("Can not connect to database.Fatal error handle by ". __FILE__);
 mysql_select_db("test",$conn);   //数据库名为 test
 mysql_query("SET NAMES utf8",$conn);
  
 //获取父级id
 $pid = (int)$_POST['pid'];
  
 //查询子级
 $sql = "SELECT id,text FROM `wuxianjilian` WHERE pid={$pid}";
 $result = mysql_query($sql,$conn);
  
 //组装子级下拉菜单
 $html = '';
 while($row = mysql_fetch_assoc($result)){
  $html .= '<option value="'.$row['id'].'">'.$row['text'].'</option>';
 }
 
 if(!empty($html)) $html = '<select class="selection"><option value="">请选择</option>' . $html . '</select>';
  
 //输出下拉菜单
 echo json_encode($html);
//End_php
 
 ?>