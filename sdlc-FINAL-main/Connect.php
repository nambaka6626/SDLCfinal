<?php
// include "Connect.php"; // Kết nối với cơ sở dữ liệu

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'student_management');
// Kết nối với cơ sở dữ liệu
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("ERROR: Could not connect. " . $conn->connect_error);
}


// else{
//     echo'ok';
// }