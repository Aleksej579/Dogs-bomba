<?php
    require_once "pass_with_db.php";
?>

<?php
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}


if (!mysqli_select_db($conn, $db_name)) {
    echo "Unable to select mydb: " . mysql_error();
    exit;
}

mysqli_set_charset($conn, 'utf8');

mysqli_query($conn, "SET names $db_charset");
?>