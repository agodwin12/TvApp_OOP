<?php

class dbconnection{
var $server = "localhost";
var $user= "root";
var $password = "";
var $table="tvs";
var $dbName= "tvapp";

    public function connect(){
        $con = mysqli_connect($this->server,$this->user,$this->password,$this->dbName);
        return $con;
    }
    public function insert($name,$number,$author){
        $conn=$this->connect();
        mysqli_query($conn,"insert into".$this->table."(tvName,tvNumber,tvAuthor) Values($name,$number,$author)")or die(mysqli_error($conn));
        echo "<div style='padding:20px; background-color: deepskyblue'>TV ADDED SUCCESSFULLY</div>";
    }
    public function update(){

    }
}

?>



