<?php
SESSION_START();
unset($_SESSION['sess_user']);
session_destroy();
header("location:index.php");

?>