<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "alfeche_baculio";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if(!$con)
{
    die("". mysqli_connect_error());
}


?>