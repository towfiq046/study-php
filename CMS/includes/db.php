<?php
$db_host = [
    "db_host" => "localhost",
    "db_user" => "root",
    "db_pass" => "",
    "db_name" => "cms"
];

foreach($db_host as $key => $value) {
    define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn) {
    // echo "success";
}


?>