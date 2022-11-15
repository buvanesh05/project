
<?php
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "project/_templates/$name.php"; // give according to your file path not consistant.
}

// function validate_credentials($username, $password)
// {
//     if ($username == "sibi@selfmade.ninja" and $password == "password") {
//         return true;
//     } else {
//         return false;
//     }
// }
