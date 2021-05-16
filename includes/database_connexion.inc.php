<?php

$serverName = "localhost:3307";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "astronautest_database";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn)
{
    die("connection to database failed");
}


