<?php

// upstream test
echo "Hello from upstream: " . gethostname();
echo "<br/>";

// database test
$db = "devops";
$db_host = "database";
$db_user = "devops";
$db_pass = "devops";

$dbh = new PDO("mysql:host=${db_host};dbname=${db}", $db_user, $db_pass);
foreach($dbh->query('select * from devops_test where id = 1') as $row) {
    echo $row['message'];
}
$dbh = null;
