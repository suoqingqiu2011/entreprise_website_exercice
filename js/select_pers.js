var xmlHttpPers;
//var xmlHttpPers1;

/***************************************/
function showEmploye(str)
{ 
xmlHttpPers=GetXmlHttpObject();
if (xmlHttpPers==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="getlistemploye1.php";
url=url+"?element_op="+str;
url=url+"&sid="+Math.random();
xmlHttpPers.onreadystatechange=stateChangedEmploye ;
xmlHttpPers.open("GET",url,true);
xmlHttpPers.send(null);
}

function showEmploye1(str)
{ 
xmlHttpPers=GetXmlHttpObject();
if (xmlHttpPers==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="getlistemploye1.php";
url=url+"?element_op1="+str;
url=url+"&sid="+Math.random();
xmlHttpPers.onreadystatechange=stateChangedEmploye ;
xmlHttpPers.open("GET",url,true);
xmlHttpPers.send(null);
}

/***************************************/
/*function showEmployeIntro(str)
{ 
xmlHttpPers1=GetXmlHttpObject();
if (xmlHttpPers1==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="getlistemploye2.php";
url=url+"?element_op="+str;
url=url+"&sid="+Math.random();
xmlHttpPers1.onreadystatechange=stateChangedEmploye1 ;
xmlHttpPers1.open("GET",url,true);
xmlHttpPers1.send(null);
}

function showEmployeIntro1(str)
{ 
xmlHttpPers1=GetXmlHttpObject();
if (xmlHttpPers1==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="getlistemploye2.php";
url=url+"?element_op1="+str;
url=url+"&sid="+Math.random();
xmlHttpPers1.onreadystatechange=stateChangedEmploye1 ;
xmlHttpPers1.open("GET",url,true);
xmlHttpPers1.send(null);
}
*/

/***************************************/

function stateChangedEmploye() 
{ 
if (xmlHttpPers.readyState==4 || xmlHttpPers.readyState=="complete")
 { 
 document.getElementById("list_employe").innerHTML=xmlHttpPers.responseText ;
 } 
}
/*
function stateChangedEmploye1() 
{ 
if (xmlHttpPers1.readyState==4 || xmlHttpPers1.readyState=="complete")
 { 
 document.getElementById("intro_pers").innerHTML=xmlHttpPers1.responseText ;
 } 
}*/

/***************************************/
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}