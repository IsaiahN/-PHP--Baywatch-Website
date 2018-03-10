<?
$hostname = "localhost"; //your hostname [usually 'localhost']
$db_username = "amandala_bay"; //database username
$db_password = "baywatch"; //database password
$db_name = "amandala_bay"; //database name

$conn = mysql_connect("".$hostname."","".$db_username."","".$db_password."");
mysql_select_db("".$db_name."") or die(mysql_error());
?>