<?php

$servername = "localhost";
$dBUsername = "ictatjcu_bunjii";
$dBPassword = "123zxc";
$dBName = "ictatjcu_bunjii";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}