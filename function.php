<?php
include "config.php";

function getUrl($url='')
{
    if($url!="")
        return $url = URL.$url;
    else
        return URL;
}

function getAdminUrl($url='')
{
    if($url!="")
        return $url = URL."admin/".$url;
    else
        return URL."admin/";
}
// Create connection
$mysql = new mysqli(DBServerName, DBUserName, DBPassword, DBName);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
?>