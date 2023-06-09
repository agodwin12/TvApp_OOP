<?php
$server = "localhost";
$user= "root";
$password = "";
$dbName= "TvApp";

class dbconnection{
    public function __construct(){
        $conn= new mysqli('localhost','root','','TvApp');
        if ($conn->connect_error){
            die('connection failed');
        }
        echo 'success';
        return $this->$conn;
    }
}

?>



