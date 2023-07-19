<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = mysqli_connect("127.0.0.1", "root", "", "test");

if($connect === false)
{
    die("ERROR: Could not connect".mysqli_connect_error());
}