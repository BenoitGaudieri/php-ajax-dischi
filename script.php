<?php
include_once __DIR__ . "/src/partials/database.php";

header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');

echo json_encode($database);