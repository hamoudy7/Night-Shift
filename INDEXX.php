<!DOCTYPE html>
<?php
include"Connection.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql='SELECT * FROM login';//login is the table name

    $retval=mysqli_query($conn,$sql);
    //ysqli_query is a method that link the connection ($conn variable in the connection.php page) with
    //the select query ($sql in this page)

    //check if the login table contains rows and check if the rows contains data
    if(mysqli_num_rows($retval)>0){
        while ($row=mysqli_fetch_assoc($retval)){//check the data in the rows
        echo"Customer username:{$row['Username']}<br>".
            "Customer password:{$row['Password']}<br>";
    }//end while
}
else{
    echo"0 results";//in case the database is empty
}

mysqli_close($conn);//close the connection
    ?>
</body>
</html>