<?php
session_start();
session_destroy();

header("location:bootstrap1.php");
exit;
?>