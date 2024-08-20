<?php

$data = Array (
    "name" => $_POST['uname'],
    "pass" => $_POST['psw']
);
// encode array to json
$json = json_encode($data);
$current = file_get_contents("data.json");
$current .= "\n";
$current .= $json;
file_put_contents("data.json", $current);

header('Location: index.html');
exit();

?>