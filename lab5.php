<?php
header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input);

$name = trim($data->name ?? '');

if ($name === '') {
    echo json_encode(array(
        "status" => "error",
        "message" => "Please enter your name."
    ));
} else {
    echo json_encode(array(
        "status" => "success",
        "message" => "Welcome, " . $name . "!"
    ));
}
?>
