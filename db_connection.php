<?php
$conn=mysqli_connect('localhost','root','','hotelmanagement');
if($conn){
    //echo "DB Connected";
}
else{
    echo "DB not conneceted";
}
?>