<?php
// MySQL credentials
$db_host = 'oracle-arm-jp.servers.frank-ruan.com';
$db_user = 'filedb';
$db_pass = 'rWJMcrSJJ4PAcLMK';
$db_name = 'filedb';
// Check the connection to MySQL
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>