<?php

include "db.php";
if(!isset($_SESSION["id"])){
    header("location:login.php");
}
session_destroy();
header("location:login.php");
?>