<html> 
<head><title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<script language='javascript' type='text/javascript'> 
var secs =3; //����ʱ������ 
var URL ; 
function Load(url){ 
URL =url; 
for(var i=secs;i>=0;i--) 
{ 
window.setTimeout('doUpdate(' + i + ')', (secs-i) * 1000); 
} 
} 
function doUpdate(num) 
{ 
document.getElementById('ShowDiv').innerHTML = 'Go Blog, '+num; 
if(num == 0) { window.location=URL; } 
} 
</script> 
</head> 
<body> 
<div id="ShowDiv"></div> 
<script language="javascript"> 
Load("blog"); 
</script> 
</body> 
</html>