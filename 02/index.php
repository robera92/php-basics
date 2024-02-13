<?php

$hours = [
    78578 => [
        'firstName' => 'Jonas',
        'lastName'  => 'Jonaitis',
        'workingHours' => [
            '2023-12-12' => 100,
            '2023-11-12' => 50,
            '2023-10-12' => 15,
            '2023-10-25' => 19,
            '2023-10-22' => 15
        ]
    ],
    78579 => [
        'firstName' => 'Petras',
        'lastName'  => 'Petraitis',
        'workingHours' => [
            '2023-12-10' => 80,
            '2023-11-15' => 60,
            '2023-10-14' => 20,
            '2023-10-21' => 22,
            '2023-10-29' => 18
        ]
    ],
    78580 => [
        'firstName' => 'Kestas',
        'lastName'  => 'Kestaitis',
        'workingHours' => [
            '2023-12-05' => 90,
            '2023-11-10' => 55,
            '2023-10-11' => 25,
            '2023-10-23' => 30,
            '2023-10-27' => 16
        ]
    ],
    78581 => [
        'firstName' => 'Robertas',
        'lastName'  => 'Robertauskas',
        'workingHours' => [
            '2023-12-08' => 85,
            '2023-11-09' => 45,
            '2023-10-13' => 35,
            '2023-10-24' => 25,
            '2023-10-30' => 20
        ]
    ],
    78582 => [
        'firstName' => 'Vardas',
        'lastName'  => 'Pavardenis',
        'workingHours' => [
            '2023-12-15' => 95,
            '2023-11-20' => 65,
            '2023-10-18' => 40,
            '2023-10-26' => 18,
            '2023-10-31' => 22
        ]
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include 'table.php'; ?>
    </div>
</body>
</html>