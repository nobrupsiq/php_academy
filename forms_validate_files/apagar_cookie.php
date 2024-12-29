<?php
# ESSA PAGINA FICA RESPONSAVEL POR APAGAR O COOKIE E NOS ENVIAR DE VOLTA PARA A PAGINA INDEX;
setcookie('nome', '', time() - 3600); # 3600MS é 1 minuto

header('Location: http_request.php');
exit;