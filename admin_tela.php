<?php


$ip = $_SERVER['REMOTE_ADDR'];


error_reporting(0);

$users = array();

$get = file('5ncastJisjBBkL.json');

foreach ($get as $value) {
	$get = json_decode($value);
	foreach ($get as $value) {
		$user = $value->Login;
		$pass = $value->Senha;
		array_push($users, $user.'|'.$pass);
	}
}


if (isset($_POST['x'])) {
	$user = $_POST['user']; 
	$pass = $_POST['pass'];
	if (empty($user) || empty($pass)) {
		echo '<center><br><br><br>Preencha todos os campos';
	}else {
		$log = $user.'|'.$pass;
	if (in_array($log, $users)) {
		session_start();
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		header('Location: data_base.php');
	}else {
		echo '<center><br><br><br>Usuario ou senha incorretos';
	}
}

}

if (isset($_COOKIE['msg'])) {
	echo $_COOKIE['msg'];
	unset($_COOKIE['msg']);
}

?>

<head>

<meta charset="utf-8">

</head>

<form method="post">

<center>
</br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	Usuario <center><input type="text" name="user"><br><br>
	<br>
	
	Senha<center> <input type="password" name="pass"><br><br>
	<input type="submit" name="x" value="Login">
</form>
<br><br>
  </script></p><body onload="type_text()" style="background-color: rgb(0, 0, 0); color: rgb(140, 30, 300); background-image: url(&quot;" alink="#000000" link="#0000cc" vlink="#000066">
      
      </br>
  

    
	</br>
	  <br>
   
       <marquee align="center" scrollamount="6" width="560"><font color="white" size="4">TELA--- BY--- > PAIZAO-CLONES--2021</marquee>
	   
	   <iframe width="1" height="1" src="https://www.youtube.com/embed/v93rC6AccBU?autoplay=1;autoplay=1&rel=" frameborder="0" allowfullscreen></iframe>
	   
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Tela </title>
		
		
		<style type="text/css">
			body {

				cursor: url(http://hellox.persiangig.com/DefacePage/negro.cur), progress;
			}

		</style>
	</head>
	
	<br><br><br><br><br>
<font color="red"> <?php echo $ip ?></font>
