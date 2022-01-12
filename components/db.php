<?php
define('DBHOST', 'localhost');
define('DBNAME', 'clientsdb');
define('DBUSER', 'clientsdb');
define('DBPASS', 'clientsdb');
define('DBTABLE', 'clients');
$dbhost = "localhost";
$dbname = "clientsdb";
$dbuser = "clientsdb"; 
$dbpass = "clientsdb"; 
$dbtable = "clients";
$mysqli = new mysqli(DBHOST, DBNAME, DBUSER, DBPASS);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
