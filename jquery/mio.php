<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mio = "localhost";
$database_mio = "drupaltest";
$username_mio = "cs_alumni";
$password_mio = "sjk601702b";
$mio = mysqli_connect($hostname_mio, $username_mio, $password_mio, $database_mio);
if (!$mio){
echo mysql_errno() ."<br>";
echo mysql_error() ."<br>";
echo "資料庫連結失敗，請洽管理員" ;
}
?>
