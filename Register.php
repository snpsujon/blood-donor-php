<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "af";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "Successfully Registered ";

$sql="INSERT INTO member(name,fathername,nid,phone,address)VALUES('$_POST[name]','$_POST[fathername]','$_POST[nid]','$_POST[phone]','$_POST[address]')";


if (mysqli_query($conn, $sql)) {
    echo "Now you are a proud member of Alhamdulillah Foundation";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>