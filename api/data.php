<?php

$data = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
    ['id' => 3, 'name' => 'Eve', 'email' => 'eve@example.com'],
];

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost:5175');
echo json_encode($data);

// in this folder /php, type in terminal:  php -S localhost:8000 
// to create server for PHP. 
//Then type in browser: http://localhost:8000/data.php

// Note the added Accesss-Control-Allow-Origin above for the header.

// Modify the fetch() function argument in App.jsx: 
// const res = await fetch('http://localhost:8000/data.php');
?>