<?php
$timezone=date_default_timezone_set("Indian/Maldives");
$con=mysqli_connect("localhost","root","MosH@1211","employeedb");

if(mysqli_connect_errno()){
    echo "failed to connect: " . mysqli_connect_errno();
}
else{
    echo "No error";
}
?>