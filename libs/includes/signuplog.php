<?php
class user
{
    public static function signup($user, $pass, $email, $phone)
    {
        $option = [
            'cost'=> 7,
        ];
        $pass= password_hash($pass, PASSWORD_BCRYPT, $option);
        $conn=database::getconnection();
       
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`,`active`)
        VALUES('$user', '$pass', '$email','$phone','1');";
        $result=false;
        if ($conn->query($sql) === true) {
            $result=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $result=false;
        }
   
        //$conn->close();
        return $result;
    }
    public static function login($user, $pass)
    {
        $query ="SELECT * FROM `auth` WHERE `username` = '$user'";
        $conn=database::getconnection();
        $result=$conn->query($query);
        if ($result->num_rows == 1) {
            $row=$result->fetch_assoc();
            //if ($row['password'] == $pass) {
            if (password_verify($pass, $row['password'])) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}