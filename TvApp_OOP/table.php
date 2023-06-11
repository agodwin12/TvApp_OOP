<?php
include 'dbconnection.php';
$db= new dbconnection();

$sql="CREATE TABLE TVS(
    id primary key auto_increment,
    TvName varchar(100),
    TvNumber int(50),
    TvAuthor varchar(100)
)";

if ($conn->query($sql)){
    echo 'table created succesfully';

}else{
    echo 'failed';
}
$conn->close();
?>
