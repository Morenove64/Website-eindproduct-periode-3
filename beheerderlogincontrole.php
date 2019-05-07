<?php
if(!isset($_SESSION['blogin']) || $_SESSION['blogin'] == false)
{
    header('location: loginbeheerderform.php');
    exit();
}
?>