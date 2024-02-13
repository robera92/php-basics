<?php

$destinations = [
    "JFK" => "New York",
    "LHR" => "London",
    "CDG" => "Paris",
    "HND" => "Tokyo",
    "SYD" => "Sydney"
];

$flights = [
    "AA123" => [
        'from' => 'JFK',
        'to' => 'LHR',
        'type' => 'direct',
        'plane' => 'Airbus A320',
        'time' => 420 //  time in minutes
    ],
    "BA456" => [
        'from' => 'LHR',
        'to' => 'CDG',
        'type' => 'direct',
        'plane' => 'Airbus A320',
        'time' => 80
    ],
    "DL789" => [
        'from' => 'CDG',
        'to' => 'HND',
        'type' => 'direct',
        'plane' => 'Airbus A320',
        'time' => 720
    ],
    "UA101" => [
        'from' => 'HND',
        'to' => 'SYD',
        'type' => 'direct',
        'plane' => 'Airbus A320',
        'time' => 550
    ],
    "QF102" => [
        'from' => 'SYD',
        'to' => 'JFK',
        'type' => 'direct',
        'plane' => 'Airbus A320',
        'time' => 1020 
    ]
];
