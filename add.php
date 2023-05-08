<?php

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];


$fp = fopen('users.csv', 'r');
while(($row = fgetcsv($fp)) !== false) {
    if($row[0] == $email) {
        http_response_code(400);
        echo "E-mail já em uso";
        exit();
    }
}


$fp = fopen('users.csv', 'a');
fputcsv($fp, [$email,$name,$password]);

http_response_code(302);
header('location:index.php');

?>