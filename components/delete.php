<?php
require_once(__DIR__ . "/errors.php");
require_once(__DIR__ . "/query_builder.php");
$dbinfo = require __DIR__ . "/dbinfo.php";


foreach ($_GET as &$value) {
    $value = trim(htmlspecialchars($value));
}

$db = new QueryBuilder();
$result = $db->delete($dbinfo['dbtable'], $_GET);

header("Location: ../index.php");