<?php

$db['db_host'] = 'mysql_db';
$db['db_user'] = 'root';
$db['db_pass'] = 'test';
$db['db_name'] = 'cms';
//These are the defined authentication environment in the db service

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL db successfully!";
}
