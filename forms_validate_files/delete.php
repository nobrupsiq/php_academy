<?php
setcookie('nome', '', time() - 3600);

header('Location: http_request.php');
exit;
