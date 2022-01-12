<?php
require_once(__DIR__ . "/errors.php");
require_once(__DIR__ . "/query_builder.php");
$dbinfo = require __DIR__ . "/dbinfo.php";


$db = new QueryBuilder();
$result = $db->query("SELECT * FROM clients ORDER BY lastname, name");


foreach($result as $row){
    echo "<tr>";
    foreach($row as $cell){
        echo   "<td>{$cell}</td>";
    }

    echo "<td><a href=\"/components/delete.php?id={$row['ID']}\"><span>Удалить</span></a></td>";
    echo       " </tr>" ;

};


exit;
