<?php
session_start();
unset($_SESSION[usuario_logado]);
session_destroy();
?>
<script>location.href='admin_tela.php';</script> 
<?php exit('Redirecionando...'); ?>