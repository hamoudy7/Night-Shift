<?php
$dbhost="localhost";//to access the location of the database
$dbName="authentication";//access the database itself via its name 
$Username="root";//the user by default is root
$Password="";

//Create a mysqli object to connect to the database
$conn = mysqli_connect($dbhost, $Username, $Password, $dbName);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
echo "Successful connected with database"."<br>";
echo"<br>";
echo"The elements in the database are :"."<br>";

}
?>