<?php
$DB_HOST = 'localhost';
$DB_USER = 'sayed';
$DB_PASS = '123456';
$DB_NAME = 'address_collector';

$db_connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database connected successfully.";
