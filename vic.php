<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Викторина</title>
<script Language="javascript">

function start(){
 var a=document.getElementById(1);
 var b=document.getElementById(2);
 a.style.display='none';
 b.style.display='block';
}
</script>
</head>
<body>
<font size="+5">
<?php include 'menu.html';?>
<p align="center" margin="center" id="1" onclick="start()" margin="center">Начать</p>
<p id="2" align="center" style="display:none;"><big><i>Ожидайте обновления!!!!!</i></big></font></p>
</body>
</html>