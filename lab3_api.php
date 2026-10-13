<?php
header('Content-Type: application/json');

$user = array(
    "id" => 1,
    "name" => "Jessa",
    "email" => "sepriotojessasabella@gmail.com",
    "status" => "active"
);

echo json_encode($user);
?>
