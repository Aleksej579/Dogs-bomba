<?php
    require_once "pass_with_db.php";
?>

<?php
$conn = mysql_connect($db_host, $db_user, $db_pass);
if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
if (!mysql_select_db($db_database)) {
    echo "Unable to select mydb: " . mysql_error();
    exit;
}
mysql_query("SET names $db_charset");
?>