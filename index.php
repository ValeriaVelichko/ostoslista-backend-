<?php
require_once 'uwu/functions.php';
require_once 'uwu/headers.php';

try {
$db = openDb();
$sql = "select * from item";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
echo header('HTTP/1.1 200 OK');
echo json_encode($results);
}
catch (PDOException $pdoex) {
    returnError($pdoex);
}