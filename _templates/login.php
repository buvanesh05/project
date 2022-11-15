<?php


$username = $_POST['user_name'];
$password = $_POST['pass_word'];

$result = user::login($username, $password);
if ($result) {
    load_template('');
} ?>

