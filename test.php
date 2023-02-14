<?php
// echo  __FILE__ . "<br>";
// $path = new SplFileInfo(__FILE__);
// echo  $path->getRealPath() . "<br>";
session_start();
include_once($_SESSION['conPath']);
echo realpath("./admin/assets/headerA.php");
