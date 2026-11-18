<?php
session_start();
session_unset();
session_destroy();
echo "vous êtes déconnecté .";
header("Location: login.php");
exit;
?>