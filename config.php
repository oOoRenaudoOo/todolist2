<?php

$hostName = "localhost";
$userName = "root";
$passWord = "";
$dataBase = "todolist2";

$dir_fs = $_SERVER['DOCUMENT_ROOT']."/";
$dir_ws="/";

$mysqli = @new mysqli($hostName, $userName, $passWord, $dataBase);


?>