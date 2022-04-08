<?php
// Database Connection Constants

define('DB_hOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'gallerydb');
$connection = mysqli_connect(DB_hOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    echo 'DataBase is connected';
} else {
    echo "Database is not connected";
}
