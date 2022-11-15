<?php
class database
{
    public static $conn=null;
    public static function getconnection()
    {
        if (database::$conn == null) {
            $servername = "";
            $username = "";
            $password = "";
            $dbname = "";
           
            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                database::$conn=$connection;
                return database::$conn;
            }
        } else {
            return database::$conn;
        }
    }
}
