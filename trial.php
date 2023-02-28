<?php
$timezone=date_default_timezone_set("Indian/Maldives");
$con=mysqli_connect("sq l12.freemysqlhosting.net","sql12600177","6cBLLGdzBK","sql12600177");

if(mysqli_connect_errno()){
    echo "failed to connect: " . mysqli_connect_errno();
}
else{
    echo "No error";
}
?>