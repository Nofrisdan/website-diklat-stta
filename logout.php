<?php
session_start();
$_SESSION = [];
session_unset();
session_desploy();


header("Location:index.php");
exit;

?>