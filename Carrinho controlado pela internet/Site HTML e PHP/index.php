<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>controle do robô</title>
</head>

<style>
body {background-color: #E9967A}
h1 {color:black}

button {
	color: black;
	background:lightgrey;
	border: 1px solid #000;
	border-radius: 8px;
	position: center;
}

</style>

<body>

<div style="text-align:center">

<h1> Robot Raspberry Pi com Câmera  </h1>
<h2> Pós Graduação Sistemas Embarcados  </h2>
<br><br>


<br><br>

<span style="display:inline-block;padding:3px;border:3px solid #FF0000; font-size: 120%;font-weight: bold;">

	<!--botões do robo--> 
	<form action="" method="post">
	<input type="submit" style="height: 75px; width: 80px"name="forward" value="frente">
	<input type="submit" style="height: 75px; width: 80px"name="stop" value="parar">
	<input type="submit" style="height: 75px; width: 80px"name="reverse" value="ré">
	<input type="submit" style="height: 75px; width: 80px"name="left" value="esquerda">
	<input type="submit" style="height: 75px; width: 80px"name="right" value="direita">
	<input type="submit" style="height: 75px; width: 80px"name="foto" value="foto">
	<input type="submit" style="height: 75px; width: 80px"name="video" value="video">
	

</span>
</div>


</body>
</html>

<?php

if ($_POST[forward]) { 
   $a- exec("sudo python3 /var/www/html/programas/forward.py");
   echo $a;
  }

if ($_POST[stop]) { 
   $a- exec("sudo python3 /var/www/html/programas/stop.py");
   echo $a;
  }

if ($_POST[reverse]) { 
   $a- exec("sudo python3 /var/www/html/programas/reverse.py");
   echo $a;
  }

if ($_POST[left]) { 
   $a- exec("sudo python3 /var/www/html/programas/left.py");
   echo $a;
  }
  
if ($_POST[right]) { 
   $a- exec("sudo python3 /var/www/html/programas/right.py");
   echo $a;
  }
  
  if ($_POST[foto]) { 
   $a- exec("sudo python3 /var/www/html/programas/foto.py");
   echo $a;
  }
  
  if ($_POST[video]) { 
   $a- exec("sudo python3 /var/www/html/programas/video.py");
   echo $a;
  }
?>
