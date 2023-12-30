<?php
    require_once "../connect.php";

$sql_log_pass = "SELECT log, pass FROM password_enter_admin";

$result_log_pass = mysqli_query($conn, $sql_log_pass);


if (!$result_log_pass) {
    echo "CONNECT";
    exit;
}

if (!$result_log_pass) {
    echo "Could not successfully run query ($sql_log_pass) from DB: " . mysql_error();
    exit;
}
if (mysqli_num_rows($result_log_pass) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
while ($row = mysqli_fetch_assoc($result_log_pass)) {
    $adminlogin = $row["log"];
    $adminpassw = $row["pass"];
    }
?>

