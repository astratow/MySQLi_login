<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$db = 'records2';

$mysqli = new mysqli($server, $user, $password $db);

mysqli_report(MYSQLI_REPORT_ALL);

?>
