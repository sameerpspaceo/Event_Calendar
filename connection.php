<?php
// DATABASE CONNECTION STRING

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'ur48x');
define('DATABASE_NAME', 'event_calendar');

//Connect and select the database
$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>