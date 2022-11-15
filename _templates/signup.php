<?php
$signup=false;
if (isset($_POST['username'])and isset($_POST['pass_word']) and isset($_POST['email_name']) and isset($_POST['phone'])) {
    $username=$_POST['username'];
    $password=$_POST['pass_word'];
    $email=$_POST['email_name'];
    $phone=$_POST['phone'];
    $result= user::signup($username, $password, $email, $phone);
    $signup=true;
}
if ($signup) {
    if ($result) {
        echo "login success";
    } else {
        echo "something went wrong";
    }
}
// print_r($_SERVER)
?>
/* write your html and load the template  as you given in signup.php*/