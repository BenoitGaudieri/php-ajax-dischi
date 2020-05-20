<?php
$database = [
    [
        "title" => "Queen",
        "artist" => "I want to break free",
        "year" => "1975",
        "img" => "#",
    ],
    [
        "title" => "Queen",
        "artist" => "I want to break free",
        "year" => "1975",
        "img" => "#",
    ],
    [
        "title" => "Queen",
        "artist" => "I want to break free",
        "year" => "1975",
        "img" => "#",
    ],
];

header("Content-Type: application/json");

echo json_encode($database);