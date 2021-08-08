<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "motorrdb";
  
$conn = new mysqli ($servername ,$username , $password, $dbname);

if($conn->connect_error){
    die ("Connection faild:" . $conn->connect_error);

}
$sql = "INSERT INTO MyGuests(ID,Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) VALUES ('$servername',
'$username','$password','$dbname')";

if ($conn->query($sql) === TRUE){
    echo "New recored created succssfully";
} else {
    echo "Error:" .$sql . "<br>". $conn->error;
}

$conn->close();


?>