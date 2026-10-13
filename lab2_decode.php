<?php
$json = '{"name":"Jessa","age":20,"email":"sepriotojessasabella@gmail.com"}';

$object = json_decode($json);
$array = json_decode($json, true);

echo "Object: " . $object->name . "<br>";
echo "Array: " . $array["email"];
?>
