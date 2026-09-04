<?php
session_start();
session_unset();
session_destroy();
header('Location: /src/pages/minhaconta.php');
exit;
?>